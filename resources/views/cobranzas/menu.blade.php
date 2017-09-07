@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')
    <ul class="nav">
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Datos - Tesoreria</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('tes.getAlumnos') }}">Alumnos</a></li>
                <li><a href="{{ route('tes.getAgregarAlumno') }}">Agregar Alumno</a></li>
                <li><a href="{{ route('tes.getBecas') }}">Becas</a></li>
                <li><a href="{{ route('tes.getAgregarBeca') }}">Agregra Beca</a></li>
                <li><a href="{{ route('tes.getCarreras') }}">Carreras</a></li>
                <li><a href="{{ route('tes.getAgregarCarrera') }}">Agregar Carrera</a></li>
            </ul>
        </li>

        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Comprobantes de Ingresos - Contabilidad</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('contabilidad.getComprobantesIngreso') }}">Ver Comprobantes de Ingresos</a></li>
                <li><a href="{{ route('contabilidad.getAgregarComprobanteIngreso') }}">Agregar Comprobantes de Ingresos</a></li>
            </ul>
        </li>
        {{--<li class="has-sub">--}}
        {{--<a href="javascript:;">--}}
        {{--<b class="caret pull-right"></b>--}}
        {{--<i class="fa fa-users"></i>--}}
        {{--<span>Becas</span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
        {{--<li><a href="index.html">Becas</a></li>--}}
        {{--<li><a href="index_v2.html">Agregar Beca</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="has-sub">--}}
        {{--<a href="javascript:;">--}}
        {{--<b class="caret pull-right"></b>--}}
        {{--<i class="fa fa-users"></i>--}}
        {{--<span>Carreras</span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
        {{--<li><a href="index.html">Carreras</a></li>--}}
        {{--<li><a href="index_v2.html">Agregar Carrera</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--<li class="has-sub">--}}
        {{--<a href="javascript:;">--}}
        {{--<b class="caret pull-right"></b>--}}
        {{--<i class="fa fa-users"></i>--}}
        {{--<span>Usarios</span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
        {{--<li><a href="index.html">Agregar Usuarios</a></li>--}}
        {{--<li><a href="index_v2.html">Borrar Usuario</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        <!-- end sidebar minify button -->
    </ul>
@endif

@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'operador')
    <ul class="nav">
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-align-left"></i>
                <span>REPORTES</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('tes.getAlumnos') }}">Estado de cuenta individual</a></li>
                <li><a href="{{ route('tes.getAgregarAlumno') }}">lista de deudores</a></li>
                <li><a href="{{ route('tes.getBecas') }}">lista de cancelaciones</a></li>
                <li><a href="{{ route('tes.getAgregarBeca') }}">Conciliacion T - C</a></li>
                <li><a href="{{ route('tes.getCarreras') }}">Reporte gral. Contabilidad de Ingresos</a></li>
            </ul>
        </li>

        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-align-left"></i>
                <span>DOCUMENTOS</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('cobranza.@getCertificado') }}">Certificados</a></li>
                <li><a href="{{ route('cobranza.@getMemo') }}">Memorandums</a></li>
                <li><a href="{{ route('cobranza.@getNotificacion') }}">Notificaciones</a></li>
                <li><a href="{{ route('cobranza.@getInforme') }}">Informes</a></li>
            </ul>
        </li>

        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-align-left"></i>
                <span>ACCIONES TOMADAS</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('cobranza.@getLlamada') }}">Llamadas</a></li>
                <li><a href="{{ route('cobranza.@getSms') }}">Mensajes SMS</a></li>
                <li><a href="{{ route('cobranza.@getEmail') }}">Emails</a></li>
            </ul>
        </li>

        <!-- begin sidebar minify button -->
        <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        <!-- end sidebar minify button -->
    </ul>
@endif

@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'usuario')

@endif
