@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Administrador de Sistema de Contabilidad</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Modificar Cuenta</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Modificar Cuenta</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de la Cuenta</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'contabilidad.putModificarCatalogoCuentaemi', 'method'  => 'PUT', 'class' => 'form-horizontal form-bordered']) }}
                    {{ Form::hidden('id', $catalogocuentaemi->id) }}

                    <div class="form-group">
                        {{ Form::label('contcodigo', 'Codigo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('contcodigo', $catalogocuentaemi->codigo, ['class' => 'form-control', 'placeholder' => 'Numero de Codigo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contdescripcion', 'Descripcion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('contdescripcion', $catalogocuentaemi->descripcion, ['class' => 'form-control', 'placeholder' => 'Descripcion de la Cuenta']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Actualizar Cuenta', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
