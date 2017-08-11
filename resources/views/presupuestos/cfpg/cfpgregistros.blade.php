@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Presupuestos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Presupuestos</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Comprobantes de Formulacion presupuestaria del Gasto</h1>
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
                        {{ Form::label('prefcto', 'Fuente Fcto:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ $comprobante->fcto }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('prefuente', 'Fuente:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ $comprobante->fuente }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('prefecha', 'Fecha:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $comprobante->fechac)->format('d/m/Y') }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('preid_unidad', 'Unidad Academica:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ $comprobante->unidad->unidad }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('preglosa', 'Glosa:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ $comprobante->glosa }}
                        {{--</div>--}}
                    </div>
                </div>
                <div class="panel-heading">
                    <h4 class="panel-title">Registros</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>REPARTICION</th>
                            <th>CATPROG</th>
                            <th>PARTIDA</th>
                            <th>DETALLE</th>
                            <th style="text-align: right">PARCIAL</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($registros as $registro)
                        <tr>
                            @if($registro->objeto->tipo == '1')
                                <td>{{ $registro->objeto->nombre }}</td>
                            @else
                                <td></td>
                            @endif
                            @if($registro->objeto->tipo == '2')
                                <td>{{ $registro->objeto->nombre }}</td>
                            @else
                                <td></td>
                            @endif
                            @if($registro->objeto->tipo == '3')
                                <td>{{ $registro->objeto->nombre }}</td>
                            @else
                                <td></td>
                            @endif
                            <td>{{ $registro->objeto->detalle }}</td>
                            @if($registro->valor != 0)
                                    <td style="text-align: right">Bs. {{ number_format($registro->valor, 2, ',', '.') }}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        @endforeach
                        </tbody>
                        <thead>
                        <tr>
                            <th colspan="4" STYLE="text-align: center">TOTAL COMPROBANTE</th>
                            <td style="text-align: right">Bs. {{ number_format($suma, 2, ',', '.') }}</td>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
