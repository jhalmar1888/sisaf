@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')
    <ul class="nav">
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Base de Datos</span>
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
                <span>Menu Level</span>
            </a>
            <ul class="sub-menu">
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        Menu 1.1
                    </a>
                    <ul class="sub-menu">
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                Menu 2.1
                            </a>
                            <ul class="sub-menu">
                                <li><a href="javascript:;">Menu 3.1</a></li>
                                <li><a href="javascript:;">Menu 3.2</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;">Menu 2.2</a></li>
                        <li><a href="javascript:;">Menu 2.3</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;">Menu 1.2</a></li>
                <li><a href="javascript:;">Menu 1.3</a></li>
            </ul>
        </li>
        <!-- begin sidebar minify button -->
        <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        <!-- end sidebar minify button -->
    </ul>
@endif

@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'usuario')

@endif
