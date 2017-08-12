@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Contabilidad</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Libro Mayor</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Libro Mayor</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Detalle</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>SUBCUENTA</th>
                            <th style="text-align: right">DEBE</th>
                            <th style="text-align: right">HABER</th>
                            {{--<th style="text-align: center" colspan="2">Opciones</th>--}}
                            {{--<th>Opciones</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->objeto->detalle }}</td>
                            @if($registro->tiporeg == 'debe')
                                <td style="text-align: right">Bs. {{ number_format($registro->valor, 2, ',', '.') }}</td>
                            @else
                                <td style="text-align: right">Bs. 0.00</td>
                            @endif
                            @if($registro->tiporeg == 'haber')
                                <td style="text-align: right">Bs. {{ number_format($registro->valor, 2, ',', '.') }}</td>
                            @else
                                <td style="text-align: right">Bs. 0.00</td>
                            @endif
                            {{--<td>{{ $objeto->detalle }}</td>--}}
                            {{--<td><a href="#">Eliminar</a></td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                        <thead>
                        <tr>
                            <th>TOTAL</th>
                            <td style="text-align: right">Bs. {{ number_format($sumadebe, 2, ',', '.') }}</td>
                            <td style="text-align: right">Bs. {{ number_format($sumahaber, 2, ',', '.') }}</td>
                        </tr>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
