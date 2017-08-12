@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Administrador del Sistema de Contabilidad</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Cuenta</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Cuenta</h1>
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
                    {{ Form::open(['route' => 'contabilidad.postAgregarCatalogoCuentaemi', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}


                    <div class="form-group">
                        {{ Form::label('contcodigo', 'Codigo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('contcodigo', old('contcodigo'), ['class' => 'form-control', 'placeholder' => 'Numero de Codigo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contdescripcion', 'Descripcion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('contdescripcion', old('contdescripcion'), ['class' => 'form-control', 'placeholder' => 'Descripcion de la Cuenta']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Cuenta', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
