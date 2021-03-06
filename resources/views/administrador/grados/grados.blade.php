@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Administrador del Sistema</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Grados</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Grados</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Grados del Sistema</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Grados</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($grados as $grado)
                        <tr>
                            <td>{{ $grado->grados }}</td>
                            <td style="text-align: center"><a href="{{ route('superadmin.getEditarGrado', $grado->id) }}">Modificar</a></td>
                            @if($grado->activo)
                                <td style="text-align: center"><a href="{{ route('superadmin.getHabilitacionGrado', $grado->id) }}">Deshabilitar</a></td>
                            @else
                                <td style="text-align: center"><a href="{{ route('superadmin.getHabilitacionGrado', $grado->id) }}">Habilitar</a></td>
                            @endif
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $grados->render() }}
            </div>
        </div>
    </div>

@endsection
