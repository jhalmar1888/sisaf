@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Administrador del Sistema</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Modificar Especialidad</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Modificar Especialidad</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de la Especialidad</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'superadmin.putEditarEspecialidad', 'method'  => 'PUT', 'class' => 'form-horizontal form-bordered']) }}
                    {{ Form::hidden('antiguo_id', $especialidad->id) }}

                    <div class="form-group">
                        {{ Form::label('especialidad', 'Especialidad:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('especialidad', $especialidad->especialidades, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Actualizar Especialidad', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
