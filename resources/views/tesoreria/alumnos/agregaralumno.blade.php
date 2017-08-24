@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Tesoreria</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Alumno</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Alumno</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de la Alumno</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'tes.postAgregarAlumno', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('tespaterno', 'Apellido Paterno:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tespaterno', old('tespaterno'), ['class' => 'form-control', 'placeholder' => 'Apellido Paterno']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesmaterno', 'Apellido Materno:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesmaterno', old('tesmaterno'), ['class' => 'form-control', 'placeholder' => 'Apellido Materno']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesnombres', 'Nombres:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesnombres', old('tesnombres'), ['class' => 'form-control', 'placeholder' => 'Nombres']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesid_beca', 'Beca:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesid_beca', $becas, ['class' => 'form-control', 'placeholder' => 'Beca']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesdireccion', 'Direccion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesdireccion', old('tesdireccion'), ['class' => 'form-control', 'placeholder' => 'Direccion']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('testelefono', 'Telefono:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('testelefono', old('testelefono'), ['class' => 'form-control', 'placeholder' => 'Telefono']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesemail', 'Email:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::email('tesemail', old('tesemail'), ['class' => 'form-control', 'placeholder' => 'Correo Electronico']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesid_deudor', 'Deudor:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesid_deudor', ['1' => 'Si', '0' => 'No'], ['class' => 'form-control', 'placeholder' => 'Beca']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesobservaciones', 'Observaciones:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesobservaciones', old('tesobservaciones'), ['class' => 'form-control', 'placeholder' => 'Observaciones']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Alumno', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
