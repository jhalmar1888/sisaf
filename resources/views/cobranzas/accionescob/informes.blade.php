@extends('plantilla')

@section('titulopagina')
    <h4>Sistema Financiero Administrativo Cobranzas</h4>
@endsection

@section('rutas')
    <ol class="breadcrumb pull-right">
        <li>informe</li>
        {{--<li>Page Options</li>--}}
        {{--<li class="active">Blank Page</li>--}}
    </ol>
@endsection

@section('subtitulo')
    <h1 class="page-header">INFORME</h1>
@endsection

@section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">INFORME</h4>
                </div>
                <div class="panel-body">
                    {!! Alert::render() !!}
                    <table class="table table-hover">
                        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                            <label>
                                <tr>  <p>ESCUELA MILITAR DE INGENIERIAhhhhh</P>
                                    <p>LA PAZ - BOLIVIA</p></tr>
                                <tr>  <center><h1>INFORME</h1></center></tr>
                                <tr> --------------------------</tr>
                                <div class="row">
                                    <input type="submit" value="IMPRIMIR" />
                                </div>
                        </form>
                        <tbody>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
