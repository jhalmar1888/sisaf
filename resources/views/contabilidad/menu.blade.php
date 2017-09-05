{{--@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')--}}
<ul class="nav">
    <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-users"></i>
            <span>Objetos</span>
        </a>
        <ul class="sub-menu">
            <li><a href="{{ route('contabilidad.getObjetos') }}">Ver Objetos</a></li>
            <li><a href="{{ route('contabilidad.getAgregarObjeto') }}">Agregar Objetos</a></li>
        </ul>
    </li>

    @if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')

        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Libro Mayor</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('contabilidad.getLibroMayor') }}">Ver Libro Mayor</a></li>
                {{--<li><a href="{{ route('contabilidad.getAgregarObjeto') }}">Agregar Objetos</a></li>--}}
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Sumas y Saldos</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('contabilidad.getLibroMayor') }}">Ver Suma y Saldos</a></li>
                {{--<li><a href="{{ route('contabilidad.getAgregarObjeto') }}">Agregar Objetos</a></li>--}}
            </ul>
        </li>



    @endif

    @if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'usuario_ingresos' ||
    \Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')

    <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-users"></i>
            <span>Comprobantes de Ingresos</span>
        </a>
        <ul class="sub-menu">
            <li><a href="{{ route('contabilidad.getComprobantesIngreso') }}">Ver Comprobantes de Ingresos</a></li>
            <li><a href="{{ route('contabilidad.getAgregarComprobanteIngreso') }}">Agregar Comprobantes de Ingresos</a></li>
        </ul>
    </li>

    @endif

    @if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'usuario_egresos' ||
    \Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')

    <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-users"></i>
            <span>Comprobantes de Egresos</span>
        </a>
        <ul class="sub-menu">
            <li><a href="{{ route('contabilidad.getComprobantesEgreso') }}">Ver Comprobantes de Egresos</a></li>
            <li><a href="{{ route('contabilidad.getAgregarComprobanteEgreso') }}">Agregar Comprobantes de Egresos</a></li>
        </ul>
    </li>

    @endif

    @if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'usuario_cargosdecuenta' ||
    \Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')

        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Comprobantes de Traspasos</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('contabilidad.getComprobantesTraspaso') }}">Ver Comprobantes de Traspasos</a></li>
                <li><a href="{{ route('contabilidad.getAgregarComprobanteTraspaso') }}">Agregar Comprobantes de Traspasos</a></li>
            </ul>
        </li>

    @endif
    @if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'usuario_cargosdecuenta' ||
    \Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')

        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Reportes</span>
            </a>
            <ul class="sub-menu">
                <li><a href="#">Ver Comprobantes de Traspasos</a></li>
                <li><a href="#">Agregar Comprobantes de Traspasos</a></li>
            </ul>
        </li>

        <li class="has-sub">
        <a href="javascript:;">
        <b class="caret pull-right"></b>
        <i class="fa fa-users"></i>
        <span>Contabilidad</span>
        </a>
        <ul class="sub-menu">
        <li><a href="#">Cuentas Contables</a></li>
        <li><a href="#">Agregar Cuentas Contables</a></li>
        <li><a href="#">Subcuentas</a></li>
        <li><a href="#">Agregar SubCuentas Contables</a></li>
        <li><a href="#">Tipo de Monedas</a></li>
        <li><a href="#">Estados Financieros de Subcuentas</a></li>
        <li><a href="{{ route('contabilidad.getSumasySaldos') }}">Balance de Sumas y Saldos</a></li>
        <li><a href="{{ route('contabilidad.getBalanceGenerales') }}">Balance General</a></li>
        </ul>
        </li>

    @endif
    {{--<li class="has-sub">--}}
        {{--<a href="javascript:;">--}}
            {{--<b class="caret pull-right"></b>--}}
            {{--<i class="fa fa-users"></i>--}}
            {{--<span>Contabilidad</span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
            {{--<li><a href="{{ route('contabilidad.getCatalogoCuentasemi') }}">Cuentas Contables</a></li>--}}
            {{--<li><a href="{{ route('contabilidad.getAgregarCatalogoCuentasemi') }}">Agregar Cuentas Contables</a></li>--}}
            {{--<li><a href="{{ route('contabilidad.getCo_Subcuentas') }}">Subcuentas</a></li>--}}
            {{--<li><a href="{{ route('contabilidad.getAgregarCo_Subcuenta') }}">Agregar SubCuentas Contables</a></li>--}}
            {{--<li><a href="{{ route('contabilidad.getCo_Tipomonedas') }}">Tipo de Monedas</a></li>--}}
            {{--<li><a href="{{ route('contabilidad.getCo_Tipodocumentos') }}">Estados Financieros de Subcuentas</a></li>--}}
            {{--<li><a href="{{ route('superadmin.getAgregarUsuario') }}">Personal</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}
    {{--<li class="has-sub">--}}
        {{--<a href="javascript:;">--}}
            {{--<b class="caret pull-right"></b>--}}
            {{--<i class="fa fa-users"></i>--}}
            {{--<span>Ingresos</span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
            {{--<li><a href="{{ route('superadmin.getAgregarUsuario') }}">Plan de cuentas Contables</a></li>--}}
            {{--<li><a href="{{ route('superadmin.getGrados') }}">Comprobantes</a></li>--}}
            {{--<li><a href="{{ route('superadmin.getAgregarGrado') }}">Estados Financieros</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}
    {{--<li class="has-sub">--}}
        {{--<a href="javascript:;">--}}
            {{--<b class="caret pull-right"></b>--}}
            {{--<i class="fa fa-users"></i>--}}
            {{--<span>Egresos</span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
            {{--<li><a href="{{ route('superadmin.getAgregarUsuario') }}">Plan de cuentas Contables</a></li>--}}
            {{--<li><a href="{{ route('superadmin.getEspecialidades') }}">Comprobantes </a></li>--}}
            {{--<li><a href="{{ route('superadmin.getAgregarEspecialidad') }}">Estados Financieros</a></li>--}}

        {{--</ul>--}}
    {{--</li>--}}
    {{--<li class="has-sub">--}}
        {{--<a href="javascript:;">--}}
            {{--<b class="caret pull-right"></b>--}}
            {{--<i class="fa fa-users"></i>--}}
            {{--<span>Cargos de Cuenta</span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
            {{--<li><a href="{{ route('superadmin.getAgregarUsuario') }}">Plan de cuentas Contables</a></li>--}}
            {{--<li><a href="{{ route('superadmin.getArmas') }}">Comprobantes</a></li>--}}
            {{--<li><a href="{{ route('superadmin.getAgregarArma') }}">Estados Financieros</a></li>--}}

        {{--</ul>--}}
    {{--</li>--}}
    {{--<li class="has-sub">--}}
        {{--<a href="javascript:;">--}}
            {{--<b class="caret pull-right"></b>--}}
            {{--<i class="fa fa-users"></i>--}}
            {{--<span>Impuestos</span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
            {{--<li><a href="{{ route('superadmin.getAgregarUsuario') }}">Plan de cuentas Contables</a></li>--}}
            {{--<li><a href="{{ route('superadmin.getArmas') }}">Comprobantes</a></li>--}}
            {{--<li><a href="{{ route('superadmin.getAgregarArma') }}">Estados Financieros</a></li>--}}

        {{--</ul>--}}
    {{--</li>--}}
    {{--<li class="has-sub">--}}
        {{--<a href="javascript:;">--}}
            {{--<b class="caret pull-right"></b>--}}
            {{--<i class="fa fa-users"></i>--}}
            {{--<span>Reportes</span>--}}
        {{--</a>--}}
        {{--<ul class="sub-menu">--}}
            {{--<li><a href="{{ route('superadmin.getAgregarUsuario') }}">Mensual</a></li>--}}
            {{--<li><a href="{{ route('superadmin.getArmas') }}">Trimestral</a></li>--}}
            {{--<li><a href="{{ route('superadmin.getAgregarArma') }}">Ejercicio</a></li>--}}

        {{--</ul>--}}
    {{--</li>--}}
    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
    <!-- end sidebar minify button -->
</ul>
{{--@endif--}}

{{--@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'operador')--}}
{{--<ul class="nav">--}}
{{--<li class="has-sub">--}}
{{--<a href="javascript:;">--}}
{{--<b class="caret pull-right"></b>--}}
{{--<i class="fa fa-align-left"></i>--}}
{{--<span>Menu Level</span>--}}
{{--</a>--}}
{{--<ul class="sub-menu">--}}
{{--<li class="has-sub">--}}
{{--<a href="javascript:;">--}}
{{--<b class="caret pull-right"></b>--}}
{{--Menu 1.1--}}
{{--</a>--}}
{{--<ul class="sub-menu">--}}
{{--<li class="has-sub">--}}
{{--<a href="javascript:;">--}}
{{--<b class="caret pull-right"></b>--}}
{{--Menu 2.1--}}
{{--</a>--}}
{{--<ul class="sub-menu">--}}
{{--<li><a href="javascript:;">Menu 3.1</a></li>--}}
{{--<li><a href="javascript:;">Menu 3.2</a></li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li><a href="javascript:;">Menu 2.2</a></li>--}}
{{--<li><a href="javascript:;">Menu 2.3</a></li>--}}
{{--</ul>--}}
{{--</li>--}}
{{--<li><a href="javascript:;">Menu 1.2</a></li>--}}
{{--<li><a href="javascript:;">Menu 1.3</a></li>--}}
{{--</ul>--}}
{{--</li>--}}
<!-- begin sidebar minify button -->
{{--<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>--}}
<!-- end sidebar minify button -->
{{--</ul>--}}
{{--@endif--}}

{{--@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'usuario')--}}

{{--@endif--}}