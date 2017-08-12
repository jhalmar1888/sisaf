@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Movimientos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Articulo a Comprobante de Ingreso</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Articulo a Comprobante de Ingreso</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos del Articulo</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'almacen.postAgregarArticuloCI', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}
                    {{ Form::hidden('id_compingreso', $comprobante->id) }}

                    <div class="form-group">
                        {{ Form::label('almid_articulo', 'Articulo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('almid_articulo', $articulos, ['class' => 'form-control', 'placeholder' => 'Articulos']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almcantidad', 'Cantidad:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::number('almcantidad', old('almcantidad'), ['class' => 'form-control', 'placeholder' => '0']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Articulo', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
