@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Tesoreria</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Modificar Pago</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Modificar Pago</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos del Pago</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'tesoreria.putModificarPago', 'method'  => 'PUT', 'class' => 'form-horizontal form-bordered']) }}
                    {{ Form::hidden('id', $pago->id) }}

                    <div class="form-group">
                        {{ Form::label('tescodigo', 'codigo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tescodigo', $pago->codigo, ['class' => 'form-control', 'placeholder' => 'codigo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesdescripcion', 'descripcion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesdescripcion', $pago->descripcion, ['class' => 'form-control', 'placeholder' => 'descripcion']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesunidad_academica', 'unidad_academica:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesunidad_academica', $pago->unidad_academica, ['class' => 'form-control', 'placeholder' => 'unidad_academica']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesmonto', 'monto:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesmonto', $pago->monto, ['class' => 'form-control', 'placeholder' => 'monto']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesmoneda', 'moneda:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesmoneda', $pago->moneda, ['class' => 'form-control', 'placeholder' => 'moneda']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesnivel', 'nivel:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesnivel', $pago->nivel, ['class' => 'form-control', 'placeholder' => 'nivel']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tescontrol_pago', 'control_pago:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tescontrol_pago', $pago->control_pago, ['class' => 'form-control', 'placeholder' => 'control_pago']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesaplica_beca', 'aplica_beca:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesaplica_beca', $pago->aplica_beca, ['class' => 'form-control', 'placeholder' => 'aplica_beca']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesaplica_cantidad', 'aplica_cantidad:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesaplica_cantidad', $pago->aplica_cantidad, ['class' => 'form-control', 'placeholder' => 'aplica_cantidad']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesaplica_multa', 'aplica_multa:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesaplica_multa', $pago->aplica_multa, ['class' => 'form-control', 'placeholder' => 'aplica_multa']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesrubro', 'rubro:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesrubro', $pago->rubro, ['class' => 'form-control', 'placeholder' => 'rubro']) }}
                        </div>
                    </div>        <div class="form-group">
                        {{ Form::label('tescategoria_programatica', 'categoria_programatica:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tescategoria_programatica', $pago->categoria_programatica, ['class' => 'form-control', 'placeholder' => 'categoria_programatica']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Pago', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
