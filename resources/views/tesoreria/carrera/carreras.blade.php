@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Tesoreria</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Carreras</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Carreras</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Carreras</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Carrera</th>
                            {{--<th style="text-align: center" colspan="2">Opciones</th>--}}
                            {{--<th>Opciones</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($carreras as $carrera)
                        <tr>
                            <td>{{ $carrera->id }}</td>
                            <td>{{ $carrera->carrera }}</td>
                            {{--<td><a href="#">Eliminar</a></td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $carreras->render() }}
            </div>
        </div>
    </div>

@endsection
