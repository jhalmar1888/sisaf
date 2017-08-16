@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - RR.HH.</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Hoja de Vida</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Hoja de Vida</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de la Persona</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form form-horizontal form-bordered">
                    <div class="form-group">
                        {{ Form::label('rhid_ciudad', 'Apellidos y Nombres:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ $persona->paterno }} {{ $persona->materno }} {{ $persona->nombres }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhid_ciudad', 'Lugar y Fecha de Nacimiento:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ $persona->lugarnacimiento }}, {{ \Carbon\Carbon::createFromFormat('Y-m-d', $persona->fechanacimiento)->format('d/m/Y') }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhpaterno', 'Nacionalidad:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ $persona->nacionalidad }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhmaterno', 'Estado Civil:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ $persona->estadocivil->estadocivil }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhci', 'Carnet de Identidad:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ $persona->ci }} {{ $persona->exp }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhnombres', 'Direccion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ $persona->direccion }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhfnacimiento', 'Telefono:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ $persona->telefono }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Estudios Primarios y Secundarios</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <tbody>
                        @foreach($estudiosps as $estudiosp)
                        <tr>
                            <td>{{ $estudiosp->estudios }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Estudios Superiores</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <tbody>
                        @foreach($estudiossup as $estudiossu)
                            <tr>
                                <td>{{ $estudiossu->titulo }}</td>
                                <td>{{ $estudiossu->facultad }}</td>
                                <td>{{ $estudiossu->universidad }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Cursos Asistidos</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <tbody>
                        @foreach($cursos as $curso)
                            <tr>
                                <td>{{ $curso->curso }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Experiencia Laboral</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <tbody>
                        @foreach($experiencias as $experiencia)
                            <tr>
                                <td>{{ $experiencia->experiencia }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Computacion</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <tbody>
                        @foreach($computaciones as $computacione)
                            <tr>
                                <td>{{ $computacione->computacion }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Caracteristicas Personales</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <tbody>
                        @foreach($caracteristicas as $caracteristica)
                            <tr>
                                <td>{{ $caracteristica->caracteristica }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Otros Documentos</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <tbody>
                        @foreach($otros as $otro)
                            <tr>
                                <td>{{ $otro->otros }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Referencias Personales</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <tbody>
                        @foreach($refpersonales as $refpersonale)
                            <tr>
                                <td>{{ $refpersonale->referencias }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
