@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - RR.HH.</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Planilla del mes {{ $mes->mes }}</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Planilla del mes {{ $mes->mes }}</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover" width="100%">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>AFP</th>
                            <th>C.I.</th>
                            <th>Apellidos y Nombres</th>
                            <th>Cargo</th>
                            <th style="text-align: right">Dias Trabajados</th>
                            <th style="text-align: right">Haber Básico</th>
                            <th style="text-align: right">Bono Antiguedad</th>
                            <th style="text-align: right">Total Ganado</th>
                            <th style="text-align: right">Total Descuentos</th>
                            <th style="text-align: right">Liquido Pagable</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($planillas as $planilla)
                            <tr>
                                <td>{{ $planilla->empleado()->codigo }}</td>
                                <td>{{ $planilla->empleado()->afpesp }}</td>
                                <td>{{ $planilla->persona->ci }} {{ $planilla->persona->exp }}</td>
                                <td>{{ $planilla->nombrepersona }}</td>
                                <td>{{ $planilla->empleado()->cargo->cargo }}</td>
                                <td style="text-align: right">{{ $planilla->dias }}</td>
                                <td style="text-align: right">{{ number_format($planilla->empleado()->hbasico, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->bonoant, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->totalganado, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->totaldescuentos, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->liquidopagable, 2, '.', ',') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
