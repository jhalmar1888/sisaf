@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Administrativo Financiero - Articulos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Modificar Articulo</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Modificar Articulo</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de los Articulos</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    <div class="panel-body panel-form">
                        {{ Form::model($articulo,['route' => 'almacen.postModificarArticulo', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}
                        {{ Form::hidden('antiguo_id', $articulo->id) }}

                        <div class="form-group">
                            {{ Form::label('almcodigo', 'Codigo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                            <div class="col-md-6 col-sm-6">
                                {{ Form::text('almcodigo', $articulo->codigo, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('alm_id_partida', 'Partida:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                            <div class="col-md-6 col-sm-6">
                                {{ Form::select('almid_partida', $partidas, $articulo->id_partida , ['class' => 'form-control', 'placeholder' => 'Selecciona un módulo']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('almdescripcion', 'Descripcion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                            <div class="col-md-6 col-sm-6">
                                {{ Form::text('almdescripcion', $articulo->descripcion, ['class' => 'form-control', 'placeholder' => 'Apellidos y Nombres']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('almtipounidad', 'Tipo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                            <div class="col-md-6 col-sm-6">
                                {{ Form::select('almtipounidad', $tipo, $articulo->id_tipounidad , ['class' => 'form-control', 'placeholder' => 'Selecciona un rol']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('almpusf', 'Precio Unidad S/Factura:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                            <div class="col-md-6 col-sm-6">
                                {{ Form::text('almpusf', $articulo->pusf, ['class' => 'form-control', 'placeholder' => 'Apellidos y Nombres']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('almpucf', 'Precio Unidad C/Factura:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                            <div class="col-md-6 col-sm-6">
                                {{ Form::text('almpucf', $articulo->pucf, ['class' => 'form-control', 'placeholder' => 'Apellidos y Nombres']) }}
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                            <div class="col-md-6 col-sm-6">
                                {{ Form::submit('Guardar Articulo', ['class' => 'btn btn-primary']) }}
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
