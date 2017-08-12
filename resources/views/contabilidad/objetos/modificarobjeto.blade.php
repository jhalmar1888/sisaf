@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Presupuestos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Modificar Usuario</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Modificar Usuario</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos del Usuario</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'superadmin.putModificarUsuario', 'method'  => 'PUT', 'class' => 'form-horizontal form-bordered']) }}
                    {{ Form::hidden('antiguo_id', $usuario->id) }}

                    <div class="form-group">
                        {{ Form::label('admusuario', 'Usuario:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('admusuario', $usuario->usuario, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('admnombres', 'Apellidos y Nombres:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('admnombres', $usuario->nombre, ['class' => 'form-control', 'placeholder' => 'Apellidos y Nombres']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('adm_id_modulo', 'Módulo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('adm_id_modulo', $modulos, $usuario->id_modulo , ['class' => 'form-control', 'placeholder' => 'Selecciona un módulo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('adm_id_rol', 'Rol:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('adm_id_rol', $roles, $usuario->id_rol , ['class' => 'form-control', 'placeholder' => 'Selecciona un rol']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Usuario', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
