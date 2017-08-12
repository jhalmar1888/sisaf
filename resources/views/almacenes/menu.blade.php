@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')
    <ul class="nav">
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Usuarios</span>
            </a>
            <ul class="sub-menu">
                <li><a href="index.html">Agregar Usuario</a></li>
                <li><a href="index_v2.html">Borrar Usuario</a></li>
            </ul>
        </li>


        <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        <!-- end sidebar minify button -->
    </ul>
@endif

@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'operador')
    <ul class="nav">
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Articulos</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('almacen.getArticulos') }}">Ver Articulos</a></li>
                <li><a href="{{ route('almacen.getAgregarArticulo') }}">Agregar Articulos</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Proveedores</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('almacen.getProveedores') }}">Ver Proveedores</a></li>
                <li><a href="{{ route('almacen.getAgregarProveedor') }}">Agregar Proveedores</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Movimientos</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('almacen.getAlmacenes') }}">Ver Almacenes</a></li>
                <li><a href="{{ route('almacen.getComprobantesIngreso') }}">Comprobantes de Ingreso</a></li>
                <li><a href="{{ route('almacen.getAgregarComprobanteIngreso') }}">Agregar Comprobante de Ingreso</a></li>
                <li><a href="{{ route('almacen.getComprobantesSalida') }}">Comprobantes de Salida</a></li>
                <li><a href="{{ route('almacen.getAgregarComprobanteSalida') }}">Agregar Comprobante de Salida</a></li>
            </ul>
        </li>
        {{--<li class="has-sub">--}}
            {{--<a href="javascript:;">--}}
                {{--<b class="caret pull-right"></b>--}}
                {{--<i class="fa fa-users"></i>--}}
                {{--<span>Solicitudes</span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
                {{--<li><a href="index.html">Ver lista de Solicitudes</a></li>--}}
                {{--<li><a href="index_v2.html">Borrar Solicitud</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Reportes</span>
            </a>
            <ul class="sub-menu">
                <li><a href="index.html">Ver lista de reportes</a></li>

            </ul>
        </li>
        <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        <!-- end sidebar minify button -->
    </ul>
@endif

@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'usuario')

@endif
