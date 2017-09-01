@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Tesoreria</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Modificar Gestion</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Modificar Gestion</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de la Gestion</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'tesoreria.putModificarGestion', 'method'  => 'PUT', 'class' => 'form-horizontal form-bordered']) }}
                    {{ Form::hidden('id', $gestion->id) }}

                    <div class="form-group">
                        {{ Form::label('tescodigo', 'codigo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tescodigo', $gestion->gestion, ['class' => 'form-control', 'placeholder' => 'codigo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesdescripcion', 'descripcion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesdescripcion', $gestion->descripcion, ['class' => 'form-control', 'placeholder' => 'descripcion']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesf_inicio', 'f_inicio:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesf_inicio', $gestion->f_inicio , ['class' => 'form-control', 'placeholder' => 'f_inicio']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesf_final', 'f_final:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesf_final', $gestion->f_final , ['class' => 'form-control', 'placeholder' => 'f_final']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesestado', 'estado:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesestado', $gestion->estado , ['class' => 'form-control', 'placeholder' => 'estado']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Gestion', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
