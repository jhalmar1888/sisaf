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
    <h1 class="page-header">Comprobantes de Salida Kardex</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos del Comprobante</h4>
                </div>
                <div class="panel-body panel-form">
                    <div class="form-group">
                        {{ Form::label('almproyecto', 'Proyecto:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ $comprobante->proyecto }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('almid_unidad', 'Almacen:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ $comprobante->unidad->unidad }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('almmotivo', 'Motivo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ $comprobante->motivo }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('almfsalida', 'Fecha de Salida:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $comprobante->fecha)->format('d/m/Y') }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('almnumero', 'Nro. de Salida:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                        {{ $comprobante->id }}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="panel-heading">
                    <h4 class="panel-title">Kardex</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Partida</th>
                            <th>Codigo</th>
                            <th>Cantidad</th>
                            <th>Unidad</th>
                            <th>Descripcion</th>
                            <th style="text-align: right">P.U.S.F.</th>
                            <th style="text-align: right">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articulos as $articulo)
                        <tr>
                            <td>{{ $articulo->articulo->partida->partida }}</td>
                            <td>{{ $articulo->articulo->codigo }}</td>
                            <td>{{ $articulo->cantidades }}</td>
                            <td>{{ $articulo->articulo->tipounidad->tipo }}</td>
                            <td>{{ $articulo->articulo->descripcion }}</td>
                            <td style="text-align: right">Bs. {{ number_format($articulo->articulo->pusf, 3, ',', '.') }}</td>
                            <td style="text-align: right">Bs. {{ number_format($articulo->ptotal, 3, ',', '.') }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
