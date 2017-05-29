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
    <h1 class="page-header">Especialidades</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Especilidades del Sistema</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Especialidades</th>
                            <th style="text-align: center" colspan="2">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($especialidades as $especialidad)
                        <tr>
                            <td>{{ $especialidad->especialidades }}</td>
                            <td style="text-align: center"><a href="{{ route('superadmin.getEditarEspecialidad', $especialidad->id) }}">Modificar</a></td>
                            @if($especialidad->activo)
                                <td style="text-align: center"><a href="{{ route('superadmin.getHabilitacionEspecialidad', $especialidad->id) }}">Deshabilitar</a></td>
                            @else
                                <td style="text-align: center"><a href="{{ route('superadmin.getHabilitacionEspecialidad', $especialidad->id) }}">Habilitar</a></td>
                            @endif
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $especialidades->render() }}
            </div>
        </div>
    </div>

@endsection
