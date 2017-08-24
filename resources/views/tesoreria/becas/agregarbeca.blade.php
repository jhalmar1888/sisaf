@extends('plantilla')

@section('titulopagina')
    <h4>Sistema  Administrativo Financiero - Tesoreria</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Agregar Beca</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Agregar Beca</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Datos de la Beca</h4>
                </div>
                @include('partials.errors')
                <div class="panel-body panel-form">
                    {{ Form::open(['route' => 'tes.postAgregarBeca', 'method'  => 'POST', 'class' => 'form-horizontal form-bordered']) }}

                    <div class="form-group">
                        {{ Form::label('tesbeca', 'Beca:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesbeca', old('tesbeca'), ['class' => 'form-control', 'placeholder' => 'Tipo de Beca']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesporcentaje', 'Porcentaje:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesporcentaje', old('tesporcentaje'), ['class' => 'form-control', 'placeholder' => '0']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('testmensualidades', 'Mensualidad:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesmensualidades', old('tesmensualidades'), ['class' => 'form-control', 'placeholder' => '0']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesextension', 'Extension:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesextension', old('tesextension'), ['class' => 'form-control', 'placeholder' => '0']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesseguro', 'Seguro:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesseguro', old('tesseguro'), ['class' => 'form-control', 'placeholder' => '0']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('tesmatricula', 'Matricula:', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::text('tesmatricula', old('tesmatricula'), ['class' => 'form-control', 'placeholder' => '0']) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('', '', ['class' => 'control-label col-md-4 col-sm-4']) }}
                        <div class="col-md-6 col-sm-6">
                            {{ Form::submit('Guardar Beca', ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@endsection
