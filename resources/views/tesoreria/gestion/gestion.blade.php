@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Tesoreria</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Gestion</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Gestion</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Gestion</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha final</th>
                            <th>Estado</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                            {{--<th>Opciones</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($gestion as $gestio)
                        <tr>
                            <td>{{ $gestio->codigo}}</td>
                            <td>{{ $gestio->descripcion }}</td>
                            <td>{{ $gestio->f_inicio }}</td>
                            <td>{{ $gestio->f_final }}</td>
                            <td>{{ $gestio->estados }} </td>
                            <td><a href="#">Modificar</a></td>
                            <td><a href="#">Eliminar</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $gestion->render() }}
            </div>
        </div>
    </div>

@endsection
