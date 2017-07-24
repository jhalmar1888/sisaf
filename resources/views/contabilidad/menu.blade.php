{{--@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')--}}
<ul class="nav">
    <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-users"></i>
            <span>Contabilidad</span>
        </a>
        <ul class="sub-menu">
            <li><a href="{{ route('superadmin.getUsuarios') }}">Cuentas Contables</a></li>
            <li><a href="{{ route('superadmin.getAgregarUsuario') }}">Plan de Cuentas Contables</a></li>
            <li><a href="{{ route('superadmin.getAgregarUsuario') }}">Subcuentas</a></li>
            <li><a href="{{ route('superadmin.getAgregarUsuario') }}">Estados Financieros de Cuentas</a></li>
            <li><a href="{{ route('superadmin.getAgregarUsuario') }}">Estados Financieros de Subcuentas</a></li>
            <li><a href="{{ route('superadmin.getAgregarUsuario') }}">Personal</a></li>
        </ul>
    </li>
    <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-users"></i>2
            <span>Ingresos</span>
        </a>
        <ul class="sub-menu">
            <li><a href="{{ route('superadmin.getAgregarUsuario') }}">Plan de cuentas Contables</a></li>
            <li><a href="{{ route('superadmin.getGrados') }}">Comprobantes</a></li>
            <li><a href="{{ route('superadmin.getAgregarGrado') }}">Estados Financieros</a></li>
        </ul>
    </li>
    <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-users"></i>
            <span>Egresos</span>
        </a>
        <ul class="sub-menu">
            <li><a href="{{ route('superadmin.getAgregarUsuario') }}">Plan de cuentas Contables</a></li>
            <li><a href="{{ route('superadmin.getEspecialidades') }}">Comprobantes </a></li>
            <li><a href="{{ route('superadmin.getAgregarEspecialidad') }}">Estados Financieros</a></li>

        </ul>
    </li>
    <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-users"></i>
            <span>Cargos de Cuenta</span>
        </a>
        <ul class="sub-menu">
            <li><a href="{{ route('superadmin.getAgregarUsuario') }}">Plan de cuentas Contables</a></li>
            <li><a href="{{ route('superadmin.getArmas') }}">Comprobantes</a></li>
            <li><a href="{{ route('superadmin.getAgregarArma') }}">Estados Financieros</a></li>

        </ul>
    </li>
    <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-users"></i>
            <span>Impuestos</span>
        </a>
        <ul class="sub-menu">
            <li><a href="{{ route('superadmin.getAgregarUsuario') }}">Plan de cuentas Contables</a></li>
            <li><a href="{{ route('superadmin.getArmas') }}">Comprobantes</a></li>
            <li><a href="{{ route('superadmin.getAgregarArma') }}">Estados Financieros</a></li>

        </ul>
    </li>
    <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-users"></i>
            <span>Reportes</span>
        </a>
        <ul class="sub-menu">
            <li><a href="{{ route('superadmin.getAgregarUsuario') }}">Mensual</a></li>
            <li><a href="{{ route('superadmin.getArmas') }}">Trimestral</a></li>
            <li><a href="{{ route('superadmin.getAgregarArma') }}">Ejercicio</a></li>

        </ul>
    </li>
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
</ul>
{{--@endif--}}

{{--@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'usuario')--}}

{{--@endif--}}