@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - RR.HH.</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Persona</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Persona</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de la Persona</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'rh.postAgregarPersona', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('rhci', 'Carnet de Identidad:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhci', old('rhci'), ['class' => 'form-control', 'placeholder' => 'C.I.']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhid_ciudad', 'Expedido:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('rhid_ciudad', $ciudades, ['class' => 'form-control', 'placeholder' => 'Expedido']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhpaterno', 'Paterno:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhpaterno', old('rhpaterno'), ['class' => 'form-control', 'placeholder' => 'Apellido Paterno']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhmaterno', 'Materno:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhmaterno', old('rhmaterno'), ['class' => 'form-control', 'placeholder' => 'Apellido Materno']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhnombres', 'Nombres:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhnombres', old('rhnombres'), ['class' => 'form-control', 'placeholder' => 'Nombres']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhfnacimiento', 'Fecha de Nacimiento:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhfnacimiento', old('rhfnacimiento'), ['class' => 'form-control', 'placeholder' => 'dd/mm/YY']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhlugar', 'Lugar de Nacimiento:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhlugar', old('rhlugar'), ['class' => 'form-control', 'placeholder' => 'Lugar de Nacimiento']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhid_sangre', 'Tipo de Sangre:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('rhid_sangre', $tiposangre, ['class' => 'form-control', 'placeholder' => 'Tipo de Sangre']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhid_genero', 'Genero:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('rhid_genero', $genero, ['class' => 'form-control', 'placeholder' => 'Genero']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhid_estadocivil', 'Estado Civil:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('rhid_estadocivil', $estadocivil, ['class' => 'form-control', 'placeholder' => 'Estado Civil']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhtelefono', 'Telefono:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhtelefono', old('rhtelefno'), ['class' => 'form-control', 'placeholder' => 'Telefono']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhdireccion', 'Direccion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhdireccion', old('rhdireccion'), ['class' => 'form-control', 'placeholder' => 'Direccion']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhnacionalidad', 'Nacionalidad:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhnacionalidad', old('rhnacionalidad'), ['class' => 'form-control', 'placeholder' => 'Nacionalidad']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Persona', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
