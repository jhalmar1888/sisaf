@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Contabilidad</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Objetos</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Objeto</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos del Objeto</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'contabilidad.postAgregarObjeto', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('contipo', 'Tipo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('contipo', $tipo, null, ['class' => 'form-control', 'placeholder' => 'Tipo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('concodigo', 'Codigo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('concodigo', old('concodigo'), ['class' => 'form-control', 'placeholder' => 'Nombre del Codigo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('condetalle', 'Detalle:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('condetalle', old('condetalle'), ['class' => 'form-control', 'placeholder' => 'Detalle']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Objeto', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
