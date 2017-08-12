@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Contabilidad</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Contabilidad</li>
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
                    {{ Form::open(['route' => 'contabilidad.postAgregarComprobanteIngreso', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('confuente', 'Fuente:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('confuente', old('confuente'), ['class' => 'form-control', 'placeholder' => 'Fuente']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('condocref', 'Doc. Ref.:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('condocref', old('condocref'), ['class' => 'form-control', 'placeholder' => 'Documento de Referencia']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('coninteresados', 'Interesados:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('coninteresados', old('coninteresados'), ['class' => 'form-control', 'placeholder' => 'Interesados']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('concheque', 'Cheque No.:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('concheque', old('concheque'), ['class' => 'form-control', 'placeholder' => 'Cheque No.']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contcambio', 'Tipo de Cambio:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('contcambio', old('contcambio'), ['class' => 'form-control', 'placeholder' => 'Tipo de Cambio']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('confecha', 'Fecha:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('confecha', \Carbon\Carbon::now()->format('d/m/Y'),['class' => 'form-control', 'placeholder' => 'dd/mm/YYYY']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('conid_unidad', 'Unidad Academica:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('conid_unidad', $unidades, ['class' => 'form-control', 'placeholder' => 'Reparticiones']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('conglosa', 'Glosa:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('conglosa', old('conglosa'), ['class' => 'form-control', 'placeholder' => 'Glosa']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Comprobante', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
