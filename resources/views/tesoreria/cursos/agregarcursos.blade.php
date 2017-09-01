@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Tesoreria</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Cursos</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Cursos</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de Curso</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'tes.postAgregarCursos', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('tescodigo', 'codigo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tescodigo', old('tescodigo'), ['class' => 'form-control', 'placeholder' => 'codigo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesdescripcion', 'descripcion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesdescripcion', old('tesdescripcion'), ['class' => 'form-control', 'placeholder' => 'descripcion']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesrequisito_curso_anterior', 'requisito_curso_anterior:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesrequisito_curso_anterior', old('tesrequisito_curso_anterior'), ['class' => 'form-control', 'placeholder' => 'requisito_curso_anterior']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesid_carrera', 'id_carrera:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesid_carrera', $carreras, ['class' => 'form-control', 'placeholder' => 'id_carrera']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Curso', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
