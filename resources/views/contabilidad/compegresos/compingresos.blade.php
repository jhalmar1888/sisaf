@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Contabilidad</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Contabilidad</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Comprobantes de Ingresos</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Comprobantes de Ingresos</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Fecha</th>
                            <th>Glosa</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comprobantes as $comprobante)
                        <tr>
                            <td>{{ $comprobante->id }}</td>
                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $comprobante->fecha)->format('d/m/Y') }}</td>
                            <td>{{ $comprobante->glosa }}</td>
                            <td style="text-align: center"><a href="{{ route('contabilidad.getDetalleCI', $comprobante->id) }}">Ingresar</a></td>
                            <td style="text-align: center"><a href="{{ route('contabilidad.getAgregarDetalleCI', $comprobante->id) }}">Agregar Registros</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $comprobantes->render() }}
            </div>
        </div>
    </div>

@endsection
