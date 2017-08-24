<?php

namespace App\Http\Controllers;

use App\Entities\Alumno;
use App\Entities\Beca;
use App\Entities\Carrera;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class TesController extends Controller
{
    public function getCarreras()
    {
        $carreras = Carrera::paginate(50);

        return view('tesoreria.carrera.carreras', compact('carreras'));
    }

    public function getAgregarCarrera()
    {
        return view('tesoreria.carrera.agregarcarrera');
    }

    public function postAgregarCarrera(Request $request)
    {
        $this->validate($request, [
            'tescarrera'    => 'required'
        ]);

        $carrera = new Carrera;
        $carrera->carrera = $request->tescarrera;
        $carrera->save();

        Alert::message('Carrera agregada exitósamnte', 'success');

        return redirect()->route('tes.getCarreras');
    }


    public function getBecas()
    {
        $becas = Beca::paginate(50);

        return view('tesoreria.becas.becas', compact('becas'));
    }

    public function getAgregarBeca()
    {
        return view('tesoreria.becas.agregarbeca');
    }

    public function postAgregarBeca(Request $request)
    {
        $this->validate($request, [
            'tesbeca'   => 'required',
            'tesporcentaje' => 'required',
            'tesmensualidades'  => 'required',
            'tesextension'  => 'required',
            'tesseguro' => 'required',
            'tesmatricula'  => 'required'
        ]);

        $beca = new Beca;
        $beca->beca = $request->tesbeca;
        $beca->porcentaje = $request->tesporcentaje;
        $beca->mensualidades = $request->tesmensualidades;
        $beca->extension = $request->tesextension;
        $beca->seguro = $request->tesextension;
        $beca->matricula = $request->tesmatricula;
        $beca->save();

        Alert::message('Beca agregada exitósamnte', 'success');

        return redirect()->route('tes.getBecas');
    }


    public function getAlumnos()
    {
        $alumnos = Alumno::orderBy('paterno')
            ->orderBy('materno')
            ->orderBy('nombres')
            ->paginate(50);

        return view('tesoreria.alumnos.alumnos', compact('alumnos'));
    }

    public function getAgregarAlumno()
    {
        $becas = Beca::pluck('beca', 'id');

        return view('tesoreria.alumnos.agregaralumno', compact('becas'));
    }

    public function postAgregarAlumno(Request $request)
    {
        $this->validate($request, [
            'tespaterno'    => 'required',
            'tesmaterno'    => 'required',
            'tesnombres'    => 'required',
            'tesid_beca'    => 'required',
            'tesdireccion'  => 'required',
            'testelefono'   => 'required',
            'tesemail'      => 'required',
            'tesid_deudor'  => 'required',
            'tesobservaciones'  => 'required'
        ]);

        $alumno = new Alumno;
        $alumno->paterno = $request->tespaterno;
        $alumno->materno = $request->tesmaterno;
        $alumno->nombres = $request->tesnombres;
        $alumno->id_beca = $request->tesid_beca;
        $alumno->direccion = $request->tesdireccion;
        $alumno->telefono = $request->testelefono;
        $alumno->email = $request->tesemail;
        $alumno->deudor = $request->tesid_deudor;
        $alumno->observaciones = $request->tesobservaciones;
        $alumno->save();

        Alert::message('Alumno agregado exitósamnte', 'success');

        return redirect()->route('tes.getAlumnos');
    }
}
