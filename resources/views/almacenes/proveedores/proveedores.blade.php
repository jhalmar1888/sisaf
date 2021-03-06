@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo - Movimientos</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>Proveedores</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">Proveedores</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Proveedores</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Representante</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Empresa</th>
                            <th>NIT</th>
                            <th>E-Mail</th>
                            <th>Descripción</th>
                            {{--<th style="text-align: center" colspan="2">Opciones</th>--}}
                            {{--<th>Opciones</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($proveedores as $proveedor)
                        <tr>
                            <td>{{ $proveedor->proveedor }}</td>
                            <td>{{ $proveedor->direccion }}</td>
                            <td>{{ $proveedor->telefono }}</td>
                            <td>{{ $proveedor->empresa }}</td>
                            <td>{{ $proveedor->nit }}</td>
                            <td>{{ $proveedor->email }}</td>
                            <td>{{ $proveedor->descripcion }}</td>
                           {{--<td><a href="#">Eliminar</a></td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $proveedores->render() }}
            </div>
        </div>
    </div>

@endsection
