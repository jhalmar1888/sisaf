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
    <h1 class="page-header">Comprobantes de Ingreso</h1>
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
                        {{ Form::label('confuente', 'Fuente:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ $comprobante->fuente }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('confuente', 'Interesados:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                        {{ $comprobante->interesado }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('confuente', 'Doc. Ref.:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                        {{ $comprobante->docref }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('confuente', 'Cheque No.:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                        {{ $comprobante->cheque }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('confuente', 'Tipo de Cambio:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                        {{ $comprobante->tcambio }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('confecha', 'Fecha:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ \Carbon\Carbon::createFromFormat('Y-m-d', $comprobante->fecha)->format('d/m/Y') }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('conid_unidad', 'Reparticion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        {{--<div class="col-md-6 col-sm-6">--}}
                            {{ $comprobante->unidad->unidad }}
                        {{--</div>--}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('conglosa', 'Glosa:', ['class' => 'control-label col-md-4 col-sm-4']) }}
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
                            <th>CUENTA</th>
                            <th>SUBCUENTA</th>
                            <th>DETALLE</th>
                            <th style="text-align: right">DEBE</th>
                            <th style="text-align: right">HABER</th>
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
                                @if($registro->tiporeg == 'debe')
                                    <td style="text-align: right">Bs. {{ number_format($registro->valor, 2, ',', '.') }}</td>
                                @else
                                    <td style="text-align: right">Bs. 0.00</td>
                                @endif
                            @else
                                <td></td>
                            @endif
                                @if($registro->valor != 0)
                                    @if($registro->tiporeg == 'haber')
                                        <td style="text-align: right">Bs. {{ number_format($registro->valor, 2, ',', '.') }}</td>
                                    @else
                                        <td style="text-align: right">Bs. 0.00</td>
                                    @endif
                                @else
                                    <td></td>
                                @endif
                        </tr>
                        @endforeach
                        </tbody>
                        <thead>
                        <tr>
                            <th colspan="4" STYLE="text-align: center">TOTAL COMPROBANTE</th>
                            <td style="text-align: right">Bs. {{ number_format($sumadebe, 2, ',', '.') }}</td>
                            <td style="text-align: right">Bs. {{ number_format($sumahaber, 2, ',', '.') }}</td>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
