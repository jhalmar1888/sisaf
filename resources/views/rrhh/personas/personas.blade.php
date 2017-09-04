@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - RR.HH.</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Personas</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Personas</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Personas</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>C.I.</th>
                            <th>Apellidos y Nombres</th>
                            <th>Fecha Nac.</th>
                            <th>Lugar Nac.</th>
                            <th>Tipo Sangre</th>
                            <th>Genero</th>
                            <th>Estado Civil</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Nacionalidad</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($personas as $persona)
                        <tr>
                            <td>{{ $persona->ci }} {{ $persona->exp }}</td>
                            <td>{{ $persona->grado->grado }} {{ $persona->arma->arma }} {{ $persona->especialidad->especialidad }} {{ $persona->paterno }} {{ $persona->materno }} {{ $persona->nombres }}</td>
                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $persona->fechanacimiento)->format('d/m/Y') }}</td>
                            <td>{{ $persona->lugarnacimiento }}</td>
                            <td>{{ $persona->sangre->tiposangre }}</td>
                            <td>{{ $persona->generoesp }}</td>
                            <td>{{ $persona->estadocivil->estadocivil }}</td>
                            <td>{{ $persona->telefono }}</td>
                            <td>{{ $persona->direccion }}</td>
                            <td>{{ $persona->nacionalidad }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $personas->render() }}
            </div>
        </div>
    </div>

@endsection
