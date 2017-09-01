@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Tesoreria</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Modificar Curso</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Modificar Curso</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos del Curso</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'tesoreria.putModificarCurso', 'method'  => 'PUT', 'class' => 'form-horizontal form-bordered']) }}
                    {{ Form::hidden('id', $cursos->id) }}

                    <div class="form-group">
                        {{ Form::label('tescodigo', 'codigo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tescodigo', $cursos->codigo, ['class' => 'form-control', 'placeholder' => 'codigo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesdescripcion', 'descripcion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesdescripcion', $cursos->descripcion, ['class' => 'form-control', 'placeholder' => 'descripcion']) }}
                        </div>
                    <div class="form-group">
                        {{ Form::label('tesrequisito_curso_anterior', 'requisito_curso_anterior:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                             {{ Form::text('tesrequisito_curso_anterior', $cursos->requisito_curso_anterior, ['class' => 'form-control', 'placeholder' => 'requisito_curso_anterior']) }}
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
