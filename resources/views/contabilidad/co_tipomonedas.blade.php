@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Administrador del Sistema de Contabilidad</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Tipo de Monedas </li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Tipo de Monedas</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title"> Tipo de Monedas </h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th>Debe</th>
                            <th>Haber</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($co_tipomonedas as $subcuenta)
                        <tr>
                            <td>{{ $subcuenta->codigo }}</td>
                            <td>{{ $subcuenta->descripcion }}</td>

                            <td>{{ $subcuenta->estado }}</td>
                            @if($subcuenta->activo == true)
                                <td><a href="{{ route('contabilidad.getHabilitacionsubcuenta', $subcuenta->id) }}">Deshabilitar</a></td>
                            @else
                                <td><a href="{{ route('contabilidad.getHabilitacionsubcuenta', $subcuenta->id) }}">Habilitar</a></td>
                            @endif
                            <td><a href="{{ route('contabilidad.getModificarCo_Subcuenta',$subcuenta->id) }}">Modificar</a></td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $co_tipomonedas->render() }}
            </div>
        </div>
    </div>

@endsection
