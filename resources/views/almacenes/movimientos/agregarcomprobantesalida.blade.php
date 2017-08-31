@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Movimientos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Comprobante de Salida</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Comprobante de Salida</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos del Comprobante</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'almacen.postAgregarComprobanteSalida', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('almproyecto', 'Proyecto:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('almproyecto', old('almproyecto'), ['class' => 'form-control', 'placeholder' => 'Nombre del Proyecto']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almid_unidad', 'Almacen:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('almid_unidad', $unidades, ['class' => 'form-control', 'placeholder' => 'Almacen']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almmotivo', 'Motivo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('almmotivo', old('almmotivo'), ['class' => 'form-control', 'placeholder' => 'Motivo de la Salida']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almfsalida', 'Fecha de Salida:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::date('almfsalida', \Carbon\Carbon::now()->format('d/m/Y'), ['class' => 'form-control', 'placeholder' => 'Fecha de Salida']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Comprobante de Salida', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
