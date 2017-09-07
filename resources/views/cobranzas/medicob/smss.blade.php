@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo Cobranzas</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>certificados</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">certificados</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Alumnos</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <thead>
                        <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <label for="name">Nombre del cursante:</label><br />
                                <input id="name" class="input" name="name" type="text" value="" size="80" /><br />
                            </div>
                            <div class="row">
                                <label for="email">Numero de celular Cursante:</label><br />
                                <input id="email" class="input" name="email" type="text" value="" size="80" /><br />
                            </div>
                            <div class="row">
                                <label for="message">Mensaje:</label><br />
                                <textarea id="message" class="input" name="message" rows="7" cols="80"></textarea><br />
                            </div>
                            <input id="submit_button" type="submit" value="Send email" />
                        </form>
                        </thead>
                        <tbody>
                        {{--@foreach($alumnos as $alumno)--}}
                        {{--<tr>--}}
                            {{--<td>{{ $alumno->paterno}}</td>--}}
                            {{--<td>{{ $alumno->materno }}</td>--}}
                            {{--<td>{{ $alumno->nombres }}</td>--}}
                            {{--<td>{{ $alumno->beca->beca }}</td>--}}
                            {{--<td>{{ $alumno->beca->porcentaje }} %</td>--}}
                            {{--<td>Bs. {{ number_format($alumno->beca->mensualidades, 2, ',','.') }}</td>--}}
                            {{--<td>Bs. {{ number_format($alumno->beca->extension, 2, ',','.') }}</td>--}}
                            {{--<td>Bs. {{ number_format($alumno->beca->seguro, 2, ',','.') }}</td>--}}
                            {{--<td>Bs. {{ number_format($alumno->beca->matricula, 2, ',','.') }}</td>--}}
                            {{--<td>{{ $alumno->observaciones }}</td>--}}
                            {{--<td><a href="#">Modificar</a></td>--}}
                            {{--<td><a href="#">Eliminar</a></td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                        </tbody>
                    </table>
                </div>
                {{--{{ $alumnos->render() }}--}}
            </div>
        </div>
    </div>

@endsection
