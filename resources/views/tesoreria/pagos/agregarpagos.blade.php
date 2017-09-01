@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Tesoreria</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Pago</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Pago</h1>
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
                    {{ Form::open(['route' => 'tes.postAgregarPagos', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

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
                        {{ Form::label('tesunidad_academica', 'unidad_academica:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesunidad_academica', old('tesunidad_academica'), ['class' => 'form-control', 'placeholder' => 'unidad_academica']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesmonto', 'monto:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesmonto', old('tesmonto'), ['class' => 'form-control', 'placeholder' => 'monto']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesmoneda', 'moneda:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesmoneda', ['1' => 'Bs.', '0' => 'Dolar'], ['class' => 'form-control', 'placeholder' => 'moneda']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesnivel', 'nivel:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesnivel', ['1' => 'nivel titulo', '0' => 'nivel registro'], ['class' => 'form-control', 'placeholder' => 'nivel']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tescontrol_pago', 'control_pago:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tescontrol_pago', ['1' => 'Fijo', '0' => 'Programado'], ['class' => 'form-control', 'placeholder' => 'control_pago']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesaplica_beca', 'aplica_beca:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesaplica_beca', ['1' => 'Si', '0' => 'No'], ['class' => 'form-control', 'placeholder' => 'aplica_beca']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesaplica_cantidad', 'aplica_cantidad:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesaplica_beca', ['1' => 'Si', '0' => 'No'], ['class' => 'form-control', 'placeholder' => 'aplica_cantidad']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesaplica_multa', 'aplica_multa:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('tesaplica_multa', ['1' => 'Si', '0' => 'No'], ['class' => 'form-control', 'placeholder' => 'aplica_multa']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesrubro', 'rubro:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesrubro', old('tesrubro'), ['class' => 'form-control', 'placeholder' => 'rubro']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tescategoria_programatica', 'categoria_programatica:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tescategoria_programatica', old('tescategoria_programatica'), ['class' => 'form-control', 'placeholder' => 'categoria_programatica']) }}
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
