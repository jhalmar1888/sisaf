@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Movimientos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Comprobante de Ingreso</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Comprobante de Ingreso</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos del Comprobante</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'almacen.postAgregarComprobanteIngreso', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('almid_proveedor', 'Proveedor:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('almid_proveedor', $proveedores, ['class' => 'form-control', 'placeholder' => 'Proveedor']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almnfactura', 'No. Factura:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::number('almnfactura', old('almnfactura'), ['class' => 'form-control', 'placeholder' => '0']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almfecha', 'Fecha:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::date('almfecha', \Carbon\Carbon::now()->format('d/m/Y'), ['class' => 'form-control', 'placeholder' => 'Fecha']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('almcontacto', 'Contacto Proveedor:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('almcontacto', old('almcontacto'), ['class' => 'form-control', 'placeholder' => 'Contacto Proveedor']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Comprobante de Ingreso', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
