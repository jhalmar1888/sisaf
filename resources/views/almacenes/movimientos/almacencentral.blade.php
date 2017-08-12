@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Movimientos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Almacen</li>
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
                            <th>Cantidad</th>
                            <th style="text-align: right">P.U.S.F.</th>
                            <th style="text-align: right">P.U.C.F.</th>
                            <th style="text-align: right">P.TOTAL.S.F.</th>
                            <th style="text-align: right">P.TOTAL.C.F.</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($almacenes as $almacen)
                        <tr>
                            <td>{{ $almacen->articulo->codigo }}</td>
                            <td>{{ $almacen->articulo->partida->partida }}</td>
                            <td>{{ $almacen->cantidad }}</td>
                            <td>{{ $almacen->articulo->tipounidad->tipo }}</td>
                            <td>{{ $almacen->articulo->descripcion }}</td>
                            <td style="text-align: right">Bs. {{ number_format($almacen->articulo->pusf, 3, ',', '.') }}</td>
                            <td style="text-align: right">Bs. {{ number_format($almacen->articulo->pucf, 3, ',', '.') }}</td>
                            <td style="text-align: right">Bs. {{ number_format($almacen->articulo->pusf * $almacen->cantidad, 3, ',', '.') }}</td>
                            <td style="text-align: right">Bs. {{ number_format($almacen->articulo->pucf * $almacen->cantidad, 3, ',', '.') }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $almacenes->render() }}
            </div>
        </div>
    </div>

@endsection
