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
    <h1 class="page-header">Comprobantes de Salida</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Comprobantes de Salida</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Proyecto</th>
                            <th>Almacen</th>
                            <th>Motivo</th>
                            <th>Fecha</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($compsalidas as $compsalida)
                        <tr>
                            <td>{{ $compsalida->proyecto }}</td>
                            <td>{{ $compsalida->unidad->unidad }}</td>
                            <td>{{ $compsalida->motivo }}</td>
                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $compsalida->fecha)->format('d/m/Y') }}</td>
                            <td style="text-align: center"><a href="{{ route('almacen.getComprobanteSalidaKardex', $compsalida->id) }}">Ingresar</a></td>
                            <td style="text-align: center"><a href="{{ route('almacen.getAgregarArticuloCS', $compsalida->id) }}">Agregar Articulos</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $compsalidas->render() }}
            </div>
        </div>
    </div>

@endsection
