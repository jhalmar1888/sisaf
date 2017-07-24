@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Movimientos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Articulos</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Articulos</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos del Articulo</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'almacen.postAgregarArticulo', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('almcodigo', 'Código:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('almcodigo', old('almcodigo'), ['class' => 'form-control', 'placeholder' => 'Código']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almid_partida', 'Partida:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('almid_partida', $partidas, ['class' => 'form-control', 'placeholder' => 'Partida']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almdescripcion', 'Descripcion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('almdescripcion', old('almdescripcion'), ['class' => 'form-control', 'placeholder' => 'Descripcion']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almtipounidad', 'Tipo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('almtipounidad', $tipounidad, ['class' => 'form-control', 'placeholder' => 'Tipo de Unidad']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almpusf', 'Precio Unidad s/factura:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('almpusf', old('almpusf'), ['class' => 'form-control', 'placeholder' => '0.00']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almpucf', 'Precio Unidad c/factura:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('almpucf', old('almpucf'), ['class' => 'form-control', 'placeholder' => '0.00']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Artículo', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
