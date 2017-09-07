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
    <h1 class="page-header">Comprobantes de Sumas y Saldos</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Comprobantes de Sumas y Saldos</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th rowspan="2" style="text-align: center">Cuenta</th>
                            <th rowspan="2" style="text-align: center">Descripcion</th>
                            <th colspan="2" style="text-align: center">Saldo Inicial</th>
                            <th colspan="2" style="text-align: center">Sumas</th>
                            <th colspan="2" style="text-align: center">Saldos</th>
                        </tr>
                        <tr>
                            <th style="text-align: center">Debe</th>
                            <th style="text-align: center">Haber</th>
                            <th style="text-align: center">Debe</th>
                            <th style="text-align: center">Haber</th>
                            <th style="text-align: center">Debe</th>
                            <th style="text-align: center">Haber</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@foreach($comprobantes as $comprobante)--}}
                        <tr>
                            <td>4654</td>
                            <td>jhbsjdbjs</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                        </tr>
                        <tr>
                            <th>4654</th>
                            <th>nkjs dkjskd</th>
                            <th style="text-align: right">4</th>
                            <th style="text-align: right">4</th>
                            <th style="text-align: right">4</th>
                            <th style="text-align: right">4</th>
                            <th style="text-align: right">4</th>
                            <th style="text-align: right">4</th>
                        </tr>
                        <tr>
                            <td>4654</td>
                            <td>nkjs dkjskd</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                            <td style="text-align: right">4</td>
                        </tr>
                        {{--@endforeach--}}
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="2" style="text-align: center">TOTALES</th>
                            <th style="text-align: right">76577</th>
                            <th style="text-align: right">76577</th>
                            <th style="text-align: right">76577</th>
                            <th style="text-align: right">76577</th>
                            <th style="text-align: right">76577</th>
                            <th style="text-align: right">76577</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                {{--{{ $comprobantes->render() }}--}}
            </div>
        </div>
    </div>

@endsection
