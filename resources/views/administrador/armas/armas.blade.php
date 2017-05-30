@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Administrador del Sistema</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Especialidades</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Armas</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Armas del Sistema</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Arma</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($armas as $arma)
                        <tr>
                            <td>{{ $arma->armas }}</td>
                            <td style="text-align: center"><a href="{{ route('superadmin.getEditarArma', $arma->id) }}">Modificar</a></td>
                            @if($arma->activo)
                                <td style="text-align: center"><a href="{{ route('superadmin.getHabilitacionArma', $arma->id) }}">Deshabilitar</a></td>
                            @else
                                <td style="text-align: center"><a href="{{ route('superadmin.getHabilitacionArma', $arma->id) }}">Habilitar</a></td>
                            @endif
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $armas->render() }}
            </div>
        </div>
    </div>

@endsection
