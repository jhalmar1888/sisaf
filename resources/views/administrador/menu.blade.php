{{--@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')--}}
    <ul class="nav">
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Usuarios</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('superadmin.getUsuarios') }}">Mostrar Usuarios</a></li>
                <li><a href="{{ route('superadmin.getAgregarUsuario') }}">Agregar Usuario</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Grados</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('superadmin.getGrados') }}">Mostrar Grados</a></li>
                <li><a href="{{ route('superadmin.getAgregarGrado') }}">Agregar Grados</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Especialidades</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('superadmin.getEspecialidades') }}">Mostrar Especialidades</a></li>
                <li><a href="{{ route('superadmin.getAgregarEspecialidad') }}">Agregar Especialidad</a></li>

            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Armas</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('superadmin.getArmas') }}">Mostrar Armas</a></li>
                <li><a href="{{ route('superadmin.getAgregarArma') }}">Agregar Arma</a></li>

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
