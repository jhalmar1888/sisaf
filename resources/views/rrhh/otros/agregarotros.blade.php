@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - RR.HH.</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Otros Documentos</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Otros Documentos</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'rh.postAgregarOtros', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('rhid_persona', 'Apellido Paterno:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::select('rhid_persona', $personas, ['class' => 'form-control', 'placeholder' => 'Apellido Paterno']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('rhotros', 'Otros Documentos:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('rhotros', old('rhotros'), ['class' => 'form-control', 'placeholder' => 'Otros Documentos']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Otros Documentos', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
