@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo Cobranzas</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>llamadas</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">llamadas</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Alumnos</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Paterno</th>
                            <th>Materno</th>
                            <th>Nombres</th>
                            <th>Beca</th>
                            <th>Descuento</th>
                            <th>Mensualidad</th>
                            <th>Extension</th>
                            <th>Seguro</th>
                            <th>Matricula</th>
                            <th>Observaciones</th>
                            {{--<th style="text-align: center" colspan="2">Opciones</th>--}}
                            {{--<th>Opciones</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        {{--@foreach($alumnos as $alumno)--}}
                        {{--<tr>--}}
                            {{--<td>{{ $alumno->paterno}}</td>--}}
                            {{--<td>{{ $alumno->materno }}</td>--}}
                            {{--<td>{{ $alumno->nombres }}</td>--}}
                            {{--<td>{{ $alumno->beca->beca }}</td>--}}
                            {{--<td>{{ $alumno->beca->porcentaje }} %</td>--}}
                            {{--<td>Bs. {{ number_format($alumno->beca->mensualidades, 2, ',','.') }}</td>--}}
                            {{--<td>Bs. {{ number_format($alumno->beca->extension, 2, ',','.') }}</td>--}}
                            {{--<td>Bs. {{ number_format($alumno->beca->seguro, 2, ',','.') }}</td>--}}
                            {{--<td>Bs. {{ number_format($alumno->beca->matricula, 2, ',','.') }}</td>--}}
                            {{--<td>{{ $alumno->observaciones }}</td>--}}
                            {{--<td><a href="#">Modificar</a></td>--}}
                            {{--<td><a href="#">Eliminar</a></td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                        </tbody>
                    </table>
                </div>
                {{--{{ $alumnos->render() }}--}}
            </div>
        </div>
    </div>

@endsection
