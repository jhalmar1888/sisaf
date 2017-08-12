@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Administrador del Sistema de Contabilidad</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Catalogo Cuentas EMI</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Catalogo Cuentas EMI</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Usuarios Catalogo Cuentas EMI</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($catalogocuentasemi as $cuenta)
                        <tr>
                            <td>{{ $cuenta->codigo }}</td>
                            <td>{{ $cuenta->descripcion }}</td>

                            <td>{{ $cuenta->estado }}</td>
                            @if($cuenta->activo == true)
                                <td><a href="{{ route('contabilidad.getHabilitacion', $cuenta->id) }}">Deshabilitar</a></td>
                            @else
                                <td><a href="{{ route('contabilidad.getHabilitacion', $cuenta->id) }}">Habilitar</a></td>
                            @endif
                            <td><a href="{{ route('contabilidad.getModificarCatalogoCuentaemi',$cuenta->id) }}">Modificar</a></td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $catalogocuentasemi->render() }}
            </div>
        </div>
    </div>

@endsection
