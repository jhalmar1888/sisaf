@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - RR.HH.</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Meses</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Meses</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Meses</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Mes</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($meses as $mes)
                        <tr>
                            <td><a href="{{ route('rh.getPlanilla', $mes->id) }}">{{ $mes->mes }}</a></td>
                            <td><a href="{{ route('rh.getPlanillaDetalle', $mes->id) }}">Reporte</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $meses->render() }}
            </div>
        </div>
    </div>

@endsection
