@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Presupuestos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Presupuestos</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Registro al Comprobante de Formulacion Presupuestaria del Gasto</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos del Registro</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'presupuestos.postAgregarDetalleCFPG', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}
                    {{ Form::hidden('id_comprobante', $comprobante->id) }}

                    <div class="form-group">
                        {{ Form::label('preid_objeto', 'Objeto:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('preid_objeto', $objetos, ['class' => 'form-control', 'placeholder' => 'Objeto']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('precantidad', 'Cantidad:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::number('precantidad', old('precantidad'), ['class' => 'form-control', 'placeholder' => '0']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Registro', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
