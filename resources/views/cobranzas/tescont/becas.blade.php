@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo Tesoreria - Cobranzas</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Becas</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Becas</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Becas</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Beca</th>
                            <th>Descuento</th>
                            <th>Mensualidad</th>
                            <th>Extension</th>
                            <th>Seguro</th>
                            <th>Matricula</th>
                            {{--<th style="text-align: center" colspan="2">Opciones</th>--}}
                            {{--<th>Opciones</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($becas as $beca)
                        <tr>
                            <td>{{ $beca->beca }}</td>
                            <td>{{ $beca->porcentaje }} %</td>
                            <td>Bs. {{ number_format($beca->mensualidades, 2, ',','.') }}</td>
                            <td>Bs. {{ number_format($beca->extension, 2, ',','.') }}</td>
                            <td>Bs. {{ number_format($beca->seguro, 2, ',','.') }}</td>
                            <td>Bs. {{ number_format($beca->matricula, 2, ',','.') }}</td>
                            {{--<td><a href="#">Modificar</a></td>--}}
                            {{--<td><a href="#">Eliminar</a></td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $becas->render() }}
            </div>
        </div>
    </div>

@endsection
