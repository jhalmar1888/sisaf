@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - RR.HH.</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Empleados</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Empleados</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Empleados</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Apellidos y Nombres</th>
                            <th>AFP</th>
                            <th>Cuenta Bancaria</th>
                            <th>Fecha de Ingreso</th>
                            <th>Tipo de Contrato</th>
                            <th>Cargo</th>
                            <th>Haber Básico</th>
                            <th>Hoja de Vida</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->codigo }}</td>
                            <td>{{ $empleado->nombreempleado() }}</td>
                            <td>{{ $empleado->afpesp }}</td>
                            <td>{{ $empleado->cuentabancaria }}</td>
                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $empleado->fingreso)->format('d/m/Y') }}</td>
                            <td>{{ $empleado->contrato }}</td>
                            <td>{{ $empleado->cargo->cargo }}</td>
                            <td>Bs. {{ $empleado->hbasico }}</td>
                            <td><a href="#">Ingresar</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $empleados->render() }}
            </div>
        </div>
    </div>

@endsection
