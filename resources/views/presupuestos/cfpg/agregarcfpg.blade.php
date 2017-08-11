@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Presupuestos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Presupuestos</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Comprobante de Formulacion presupuestaria del Gasto</h1>
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
                    {{ Form::open(['route' => 'presupuestos.postAgregarCFPG', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('prefcto', 'Fuente Fcto:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('prefcto', old('prefcto'), ['class' => 'form-control', 'placeholder' => 'Fuente Fcto.']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('prefuente', 'Fuente:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('prefuente', old('prefuente'), ['class' => 'form-control', 'placeholder' => 'Fuente']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('prefecha', 'Fecha:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('prefecha', old('prefecha'), ['class' => 'form-control', 'placeholder' => 'dd/mm/YYYY']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('preid_unidad', 'Unidad Academica:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('preid_unidad', $unidades, ['class' => 'form-control', 'placeholder' => 'Unidad Academica']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('preglosa', 'Glosa:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('preglosa', old('preglosa'), ['class' => 'form-control', 'placeholder' => 'Glosa']) }}
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
