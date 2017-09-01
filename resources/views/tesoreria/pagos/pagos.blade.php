@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Tesoreria</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Pagos</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Pagos</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Pagos</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Unidad Academica</th>
                            <th>Monto</th>
                            <th>Moneda</th>
                            <th>Nivel</th>
                            <th>Control de Pago</th>
                            <th>Aplica Beca</th>
                            <th>Aplica Cantidad</th>
                            <th>Aplica Multa</th>
                            <th>Rubro</th>
                            <th>Categoria Programatica</th>
                            {{--<th style="text-align: center" colspan="2">Opciones</th>--}}
                            {{--<th>Opciones</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pagos as $pago)
                        <tr>
                            <td>{{ $pago->codigo}}</td>
                            <td>{{ $pago->descripcion }}</td>
                            <td>{{ $pago->unidad_academica }}</td>
                            <td>{{ number_format($pago->monto, 2, ',','.') }}</td>
                            <td>{{ $pago->monedas }}</td>
                            <td>{{ $pago->nivels }} </td>
                            <td>{{ $pago->control_pagos }} </td>
                            <td>{{ $pago->aplica_becas }} </td>
                            <td>{{ $pago->aplica_cantidads }} </td>
                            <td>{{ $pago->aplica_multas }} </td>
                            <td>{{ number_format($pago->rubro, 2, ',','.') }}</td>
                            <td>{{ number_format($pago->categoria_programatica, 2, ',','.') }}</td>
                            {{--<td><a href="#">Modificar</a></td>--}}
                            {{--<td><a href="#">Eliminar</a></td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $pagos->render() }}
            </div>
        </div>
    </div>

@endsection
