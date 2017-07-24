@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Movimientos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Articulos</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Articulos</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Materiales</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Partida</th>
                            <th>Descripcion</th>
                            <th>Tipo</th>
                            <th>P.U.S.F.</th>
                            <th>P.U.C.F.</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articulos as $articulo)
                        <tr>
                            <td>{{ $articulo->codigo }}</td>
                            <td>{{ $articulo->partida->partida }}</td>
                            <td>{{ $articulo->descripcion }}</td>
                            <td>{{ $articulo->tipounidad->tipo }}</td>
                            <td>Bs. {{ $articulo->pusf }}</td>
                            <td>Bs. {{ $articulo->pucf }}</td>
                            <td><a href="#">Modificar</a></td>
                            <td><a href="#">Eliminar</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $articulos->render() }}
            </div>
        </div>
    </div>

@endsection
