@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Movimientos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Proveedores</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Proveedor</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos del Proveedor</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'almacen.postAgregarProveedor', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('almproveedor', 'Proveedor:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('almproveedor', old('almproveedor'), ['class' => 'form-control', 'placeholder' => 'Nombre del Proveedor']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almdireccion', 'Direccion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('almdireccion', old('almdireccion'), ['class' => 'form-control', 'placeholder' => 'Direccion del Proveedor']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almtelefono', 'Telefono:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('almtelefono', old('almtelefono'), ['class' => 'form-control', 'placeholder' => 'Telefono del Proveedor']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Proveedor', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
