@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'administrador')
    <ul class="nav">
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Cargos</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('rh.getCargos') }}">Cargos</a></li>
                <li><a href="{{ route('rh.getAgregarCargo') }}">Agregar Cargo</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Personas</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('rh.getPersonas') }}">Personas</a></li>
                <li><a href="{{ route('rh.getAgregarPersona') }}">AgregarPersonas</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Empleados</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('rh.getEmpleados') }}">Empleados</a></li>
                <li><a href="{{ route('rh.getAgregarEmpleado') }}">Agregar Empleados</a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="javascript:;">
                <b class="caret pull-right"></b>
                <i class="fa fa-users"></i>
                <span>Hoja de Vida</span>
            </a>
            <ul class="sub-menu">
                <li><a href="{{ route('rh.getAgregarEstudiosps') }}">Agregar Estudios Primarios y Secundarios</a></li>
                <li><a href="{{ route('rh.getAgregarEstudiossup') }}">Agregar Estudios Superiores</a></li>
                <li><a href="{{ route('rh.getAgregarCursos') }}">Agregar Cursos Asistidos</a></li>
                <li><a href="{{ route('rh.getAgregarExperiencia') }}">Agregar Experiencia Laboral</a></li>
                <li><a href="{{ route('rh.getAgregarComputacion') }}">Agregar Computacion</a></li>
                <li><a href="{{ route('rh.getAgregarCaracteristicas') }}">Agregar Caracteristicas Personales</a></li>
                <li><a href="{{ route('rh.getAgregarOtros') }}">Agregar Otros</a></li>
                <li><a href="{{ route('rh.getAgregarReferencias') }}">Agregar Referencias Personales</a></li>
            </ul>
        </li>
        <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        <!-- end sidebar minify button -->
    </ul>
@endif

@if(\Illuminate\Support\Facades\Auth::user()->rol->rol == 'usuario')
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
