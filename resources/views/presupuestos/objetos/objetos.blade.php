@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Presupuestos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Objetos</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Objetos</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Objetos</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Nombre</th>
                            <th>Detalle</th>
                            {{--<th style="text-align: center" colspan="2">Opciones</th>--}}
                            {{--<th>Opciones</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($objetos as $objeto)
                        <tr>
                            <td>{{ $objeto->tipoesp }}</td>
                            <td>{{ $objeto->nombre }}</td>
                            <td>{{ $objeto->detalle }}</td>
                            {{--<td><a href="#">Eliminar</a></td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $objetos->render() }}
            </div>
        </div>
    </div>

@endsection
