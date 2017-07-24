<?php

namespace App\Http\Controllers;

use App\Entities\KardexCentral;
use App\Entities\Material;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    public function getArticulos()
    {
        $articulos = Material::paginate(30);

        return view('almacenes.movimientos.articulos', compact('articulos'));
    }

    public function getAlmacenes()
    {
        $almacenes = KardexCentral::paginate(30);

        return view('almacenes.movimientos.almacencentral', compact('almacenes'));
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
}
