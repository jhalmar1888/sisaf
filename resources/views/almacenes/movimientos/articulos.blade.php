@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Administrador del Sistema</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Usuarios</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Usuarios</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Usuarios Adminsitradores</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Apellidos y Nombres</th>
                            <th>Módulo</th>
                            <th>Rol</th>
                            <th>Estado</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->usuario }}</td>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->modulo }}</td>
                            <td>{{ $usuario->rol }}</td>
                            <td>{{ \App\Entities\Usuario::habilitacion($usuario->activo) }}</td>
                            @if($usuario->activo == true)
                                <td><a href="{{ route('superadmin.getHabilitacion', $usuario->id) }}">Deshabilitar</a></td>
                            @else
                                <td><a href="{{ route('superadmin.getHabilitacion', $usuario->id) }}">Habilitar</a></td>
                            @endif
                            <td><a href="{{ route('superadmin.getModificarUsuario', $usuario->id) }}">Modificar</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $usuarios->render() }}
            </div>
        </div>
    </div>

@endsection
