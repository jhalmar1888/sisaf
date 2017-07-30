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
    <h1 class="page-header">Comprobantes de Ingreso</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Comprobantes de Ingreso</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Proveedor</th>
                            <th>Factura</th>
                            <th>Fecha</th>
                            <th>Contacto Proveedor</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($compingresos as $compingreso)
                        <tr>
                            <td>{{ $compingreso->proveedor->proveedor }}</td>
                            <td>{{ $compingreso->nfactura }}</td>
                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $compingreso->fecha)->format('d/m/Y') }}</td>
                            <td>{{ $compingreso->contactoproveedor }}</td>
                            <td style="text-align: center"><a href="{{ route('almacen.getComprobanteIngresoKardex', $compingreso->id) }}">Ingresar</a></td>
                            <td style="text-align: center"><a href="{{ route('almacen.getAgregarArticuloCI', $compingreso->id) }}">Agregar Articulos</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $compingresos->render() }}
            </div>
        </div>
    </div>

@endsection
