@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Administrador de Sistema de Contabilidad</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Modificar SubCuenta</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Modificar SubCuenta</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de la SubCuenta</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'contabilidad.putModificarCo_Subcuenta', 'method'  => 'PUT', 'class' => 'form-horizontal form-bordered']) }}
                    {{ Form::hidden('id', $co_subcuenta->id) }}

                    <div class="form-group">
                        {{ Form::label('contcodigo', 'Codigo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('contcodigo', $co_subcuenta->codigo, ['class' => 'form-control', 'placeholder' => 'Numero de Codigo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('contdescripcion', 'Descripcion:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('contdescripcion', $co_subcuenta->descripcion, ['class' => 'form-control', 'placeholder' => 'Descripcion de la Cuenta']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('contdebe', 'Debe:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('contdebe', $co_subcuenta->debe, ['class' => 'form-control', 'placeholder' => 'Debe de la Cuenta']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('conthaber', 'Haber:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('conthaber', $co_subcuenta->haber, ['class' => 'form-control', 'placeholder' => 'Haber de la Cuenta']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Actualizar SubCuenta', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
