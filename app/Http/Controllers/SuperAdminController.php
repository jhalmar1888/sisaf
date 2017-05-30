<?php

namespace App\Http\Controllers;

use App\Entities\Arma;
use App\Entities\Especialidad;
use App\Entities\Grado;
use App\Entities\Modulo;
use App\Entities\Rol;
use App\Entities\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Styde\Html\Facades\Alert;

class SuperAdminController extends Controller
{
    public function getUsuarios()
    {
//        $usuarios = Usuario::where('id_rol', 1)
//            ->orWhere('id_rol', 2)
//            ->orderBy('usuario')
//            ->get();

        $usuarios = DB::table('usuarios')
            ->join('roles', 'usuarios.id_rol', '=', 'roles.id')
            ->join('modulos', 'usuarios.id_modulo', '=', 'modulos.id')
            ->select(
                'usuarios.id', 'usuarios.usuario', 'usuarios.nombre',
                'modulos.modulo', 'roles.rol', 'usuarios.activo'
            )
            ->where('usuarios.id_rol', 1)
            ->orWhere('usuarios.id_rol', 2)
            ->orderBy('usuarios.activo')
            ->orderBy('modulos.modulo')
            ->orderBy('usuarios.nombre')
            ->paginate(30);

        return view('administrador.usuarios.usuarios', compact('usuarios'));
    }

    public function getAgregarUsuario()
    {
        $modulos = Modulo::all()->pluck('modulo', 'id');
        $roles = Rol::all()->pluck('rol', 'id');

        return view('administrador.usuarios.agregarusuario', compact('modulos', 'roles'));
    }

    public function postAgregarUsuario(Request $request)
    {
        $this->validate($request, [
            'admusuario'       => 'required|unique:usuarios,usuario|min:5|max:15',
            'admnombres'       => 'required|min:5|max:100',
            'password'         => 'required|min:5|max:50',
            'adm_id_modulo'    => 'required|exists:modulos,id',
            'adm_id_rol'       => 'required|exists:roles,id'
        ]);
        $nuevo_usuario = new Usuario;
        $nuevo_usuario->usuario = $request->admusuario;
        $nuevo_usuario->nombre = $request->admnombres;
        $nuevo_usuario->password = bcrypt($request->password);
        $nuevo_usuario->remember_token = str_random(100);
        $nuevo_usuario->id_modulo = $request->adm_id_modulo;
        $nuevo_usuario->id_rol = $request->adm_id_rol;
        $nuevo_usuario->activo = true;
        $nuevo_usuario->save();

        Alert::message('Usuario agergado exitósamnte', 'success');

        return redirect()->route('superadmin.getUsuarios');
    }

    public function getHabilitacion($id_usuario)
    {
        $usuario = Usuario::findOrFail($id_usuario);
        if ($usuario->activo == true){
            $usuario->activo = false;
            Alert::message('Usuario ' . $usuario->usuario . ' desactivado exitósamente', 'danger');
        } else {
            $usuario->activo = true;
            Alert::message('Usuario ' . $usuario->usuario . ' activado exitósamente', 'success');
        }
        $usuario->save();
        return redirect()->route('superadmin.getUsuarios');
    }

    public function getModificarUsuario($id_usuario)
    {
        $usuario = Usuario::findOrFail($id_usuario);

        $modulos = Modulo::all()->pluck('modulo', 'id');
        $roles = Rol::all()->pluck('rol', 'id');

        return view('administrador.usuarios.modificarusuario', compact(
            'modulos', 'roles','usuario'
        ));
    }

    public function putModificarUsuario(Request $request)
    {
        $this->validate($request, [
            'admusuario'       => ['required', 'min:5', 'max:15', Rule::unique('usuarios', 'usuario')->ignore($request->admusuario, 'usuario')],
            'admnombres'       => 'required|min:5|max:100',
            'adm_id_modulo'    => 'required|exists:modulos,id',
            'adm_id_rol'       => 'required|exists:roles,id'
        ]);
        $nuevo_usuario = Usuario::findOrFail($request->antiguo_id);
        $nuevo_usuario->usuario = $request->admusuario;
        $nuevo_usuario->nombre = $request->admnombres;
        $nuevo_usuario->id_modulo = $request->adm_id_modulo;
        $nuevo_usuario->id_rol = $request->adm_id_rol;
        $nuevo_usuario->save();

        Alert::message('Usuario modificado exitósamnte', 'success');

        return redirect()->route('superadmin.getUsuarios');
    }

    // para grados

    public function getGrados()
    {
        $grados = Grado::orderBy('grados')
            ->paginate(30);

        return view('administrador.grados.grados', compact('grados'));
    }

    public function getAgregarGrado()
    {
        return view('administrador.grados.agregargrado');
    }

    public function postAgregarGrado(Request $request)
    {
        $this->validate($request, [
            'grado' => 'required|min:1|max:10|unique:grados,grados'
        ]);

        $nuevo_grado = new Grado;
        $nuevo_grado->grados = $request->grado;
        $nuevo_grado->save();

        Alert::message('Grado agregado exitósamnte', 'success');

        return redirect()->route('superadmin.getGrados');
    }

    public function getHabilitacionGrado($id_grado)
    {
        $grado = Grado::findOrFail($id_grado);
        if ($grado->activo){
            $grado->activo = false;
            Alert::message('Grado desactivado exitósamnte', 'danger');
        } else {
            $grado->activo = true;
            Alert::message('Grado activado exitósamnte', 'success');
        }
        $grado->save();

        return redirect()->route('superadmin.getGrados');
    }

    public function getEditarGrado($id_grado)
    {
        $grado = Grado::findOrFail($id_grado);
        return view('administrador.grados.modificargrado', compact('grado'));
    }

    public function putEditarGrado(Request $request)
    {
        $this->validate($request, [
            'grado' => ['required', 'min:1', 'max:10', Rule::unique('grados', 'grados')->ignore($request->grado, 'grados')]
        ]);

        $nuevo_grado = Grado::findOrFail($request->antiguo_id);
        $nuevo_grado->grados = $request->grado;
        $nuevo_grado->save();

        Alert::message('Grado actualizado exitósamnte', 'success');

        return redirect()->route('superadmin.getGrados');
    }


    // para especialidades

    public function getEspecialidades()
    {
        $especialidades = Especialidad::orderBy('especialidades')
            ->paginate(30);

        return view('administrador.especialidades.especialidades', compact('especialidades'));
    }

    public function getAgregarEspecialidad()
    {
        return view('administrador.especialidades.agregarespecialidad');
    }

    public function postAgregarEspecialidad(Request $request)
    {
        $this->validate($request, [
            'especialidad' => 'required|min:1|max:10|unique:especialidades,especialidades'
        ]);

        $nuevo_especialidad = new Especialidad;
        $nuevo_especialidad->especialidades = $request->especialidad;
        $nuevo_especialidad->save();

        Alert::message('Especialidad agregado exitósamnte', 'success');

        return redirect()->route('superadmin.getEspecialidades');
    }

    public function getHabilitacionEspecialidad($id_especialidad)
    {
        $especialidad = Especialidad::findOrFail($id_especialidad);
        if ($especialidad->activo){
            $especialidad->activo = false;
            Alert::message('Especialidad desactivado exitósamnte', 'danger');
        } else {
            $especialidad->activo = true;
            Alert::message('Especialidad activado exitósamnte', 'success');
        }
        $especialidad->save();

        return redirect()->route('superadmin.getEspecialidades');
    }

    public function getEditarEspecialidad($id_especialidad)
    {
        $especialidad = Especialidad::findOrFail($id_especialidad);
        return view('administrador.especialidades.modificarespecialidades', compact('especialidad'));
    }

    public function putEditarEspecialidad(Request $request)
    {
        $this->validate($request, [
            'especialidad' => ['required', 'min:1', 'max:10', Rule::unique('especialidades', 'especialidades')->ignore($request->especialidad, 'especialidades')]
        ]);

        $nuevo_especialidad = Especialidad::findOrFail($request->antiguo_id);
        $nuevo_especialidad->especialidades = $request->especialidad;
        $nuevo_especialidad->save();

        Alert::message('Especialidad actualizado exitósamnte', 'success');

        return redirect()->route('superadmin.getEspecialidades');
    }

// para armas

    public function getArmas()
    {
        $armas = Arma::orderBy('armas')
            ->paginate(30);

        return view('administrador.armas.armas', compact('armas'));
    }

    public function getAgregarArma()
    {
        return view('administrador.armas.agregararma');
    }

    public function postAgregarArma(Request $request)
    {
        $this->validate($request, [
            'arma' => 'required|min:1|max:10|unique:armas,armas'
        ]);

        $nueva_arma = new Arma;
        $nueva_arma->armas = $request->arma;
        $nueva_arma->save();

        Alert::message('Arma agregada exitósamnte', 'success');

        return redirect()->route('superadmin.getArmas');
    }

    public function getHabilitacionArma($id_arma)
    {
        $arma = Arma::findOrFail($id_arma);
        if ($arma->activo){
            $arma->activo = false;
            Alert::message('Arma desactivada exitósamnte', 'danger');
        } else {
            $arma->activo = true;
            Alert::message('Arma activada exitósamnte', 'success');
        }
        $arma->save();

        return redirect()->route('superadmin.getArmas');
    }

    public function getEditarArma($id_arma)
    {
        $arma = Arma::findOrFail($id_arma);
        return view('administrador.armas.modificararmas', compact('arma'));
    }

    public function putEditarArma(Request $request)
    {
        $this->validate($request, [
            'arma' => ['required', 'min:1', 'max:10', Rule::unique('armas', 'armas')->ignore($request->arma, 'armas')]
        ]);

        $nueva_arma = Arma::findOrFail($request->antiguo_id);
        $nueva_arma->armas = $request->arma;
        $nueva_arma->save();

        Alert::message('Arma actualizada exitósamnte', 'success');

        return redirect()->route('superadmin.getArmas');
    }

}


