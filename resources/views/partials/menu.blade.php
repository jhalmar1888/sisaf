@if(\Illuminate\Support\Facades\Auth::user()->modulo->modulo == 'Tesoreria')
    @include('tesoreria.menu')
@endif

@if(\Illuminate\Support\Facades\Auth::user()->modulo->modulo == 'Administrador')
    @include('administrador.menu')
@endif

@if(\Illuminate\Support\Facades\Auth::user()->modulo->modulo == 'Contabilidad')
    @include('contabilidad.menu.menu')
@endif

@if(\Illuminate\Support\Facades\Auth::user()->modulo->modulo == 'RR.HH.')
    @include('rrhh.menu.menu')
@endif