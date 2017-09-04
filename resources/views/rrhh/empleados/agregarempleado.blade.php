@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - RR.HH.</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Persona</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Persona</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de la Persona</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'rh.postAgregarEmpleado', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('rhid_persona', 'Apellido Paterno:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('rhid_persona', $personas, ['class' => 'form-control', 'placeholder' => 'Apellido Paterno']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhcodigo', 'Codigo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhcodigo', old('rhcodigo'), ['class' => 'form-control', 'placeholder' => 'Codigo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhid_afp', 'AFP:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('rhid_afp', $afp, ['class' => 'form-control', 'placeholder' => 'AFP']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhcuentabancaria', 'Cuenta Bancaria:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhcuentabancaria', old('rhcuentabancaria'), ['class' => 'form-control', 'placeholder' => 'Cuenta Bancaria']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhfingreso', 'Fecha de Ingreso:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhfingreso', old('rhfingreso'), ['class' => 'form-control', 'placeholder' => 'dd/mm/YY']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhid_mcontrato', 'Tipo de Contrato:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('rhid_mcontrato', $contrato, ['class' => 'form-control', 'placeholder' => 'Tipo de Contrato']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhid_cargo', 'Cargo:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('rhid_cargo', $cargos, ['class' => 'form-control', 'placeholder' => 'Cargo']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhbasico', 'Haber Basico:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhhbasico', old('rhhbasico'), ['class' => 'form-control', 'placeholder' => '0.00']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Empleado', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
