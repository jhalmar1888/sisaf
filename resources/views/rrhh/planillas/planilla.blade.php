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
                            <th>Cuenta Bancaria</th>
                            <th>Fecha Nacimiento</th>
                            <th>C.I.</th>
                            <th>Apellidos y Nombres</th>
                            <th>Cargo</th>
                            <th>Clase</th>
                            <th>Fecha Inicio</th>
                            <th style="text-align: right">Dias Trabajados</th>
                            <th style="text-align: right">Haber Básico</th>
                            <th style="text-align: right">Bono Antiguedad</th>
                            <th style="text-align: right">Reintegro</th>
                            <th style="text-align: right">Total Ganado</th>
                            <th style="text-align: right">Aporte Solidario</th>
                            <th style="text-align: right">Cuenta Individual</th>
                            <th style="text-align: right">Riesgo Compartido</th>
                            <th style="text-align: right">Comision AFP</th>
                            <th style="text-align: right">Total AFP</th>
                            <th style="text-align: right">IVA 13%</th>
                            <th style="text-align: right">Aporte Mugebush</th>
                            <th style="text-align: right">Prestamo Mugebush</th>
                            <th style="text-align: right">Dias Atrasados</th>
                            <th style="text-align: right">Descuento por Atraso</th>
                            <th style="text-align: right">Otros Descuentos</th>
                            <th style="text-align: right">Total Descuentos</th>
                            <th style="text-align: right">Liquido Pagable</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($planillas as $planilla)
                            <tr>
                                <td>{{ $planilla->empleado()->codigo }}</td>
                                <td>{{ $planilla->empleado()->afpesp }}</td>
                                <td>{{ $planilla->empleado()->cuentabancaria }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $planilla->persona->fechanacimiento)->format('d/m/Y') }}</td>
                                <td>{{ $planilla->persona->ci }} {{ $planilla->persona->exp }}</td>
                                <td>{{ $planilla->nombrepersona }}</td>
                                <td>{{ $planilla->empleado()->cargo->cargo }}</td>
                                <td>{{ $planilla->empleado()->contrato }}</td>
                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $planilla->empleado()->fingreso)->format('d/m/Y') }}</td>
                                <td style="text-align: right">{{ $planilla->dias }}</td>
                                <td style="text-align: right">{{ number_format($planilla->empleado()->hbasico, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->bonoant, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->reintegro, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->totalganado, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->aportesolidario, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->cuentaindividual, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->riesgocompartido, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->comisionafp, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->totalafp, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->iva, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->aportemugebush, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->prestamo, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ $planilla->dias }}</td>
                                <td style="text-align: right">{{ number_format($planilla->descuentoatraso, 2, '.', ',') }}</td>
                                <td style="text-align: right">{{ number_format($planilla->otros, 2, '.', ',') }}</td>
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
