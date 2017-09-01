<?php

namespace App\Http\Controllers;

use App\Entities\Alumno;
use App\Entities\Beca;
use App\Entities\Carrera;
use App\Entities\cursos;
use App\Entities\gestion;
use App\Entities\pagos;
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
    public function getGestion()
    {
        $gestion = gestion::paginate(50);
//        dd($gestion[0]);

        return view('tesoreria.gestion.gestion', compact('gestion'));
    }

    public function getAgregarGestion()
    {
        return view('tesoreria.gestion.agregargestion');
    }

    public function postAgregarGestion(Request $request)
    {
        $this->validate($request, [
            'tescodigo'         => 'required',
            'tesdescripcion'    => 'required',
            'tesf_inicio'       => 'required',
            'tesf_final'        => 'required',
            'tesestado'         => 'required'
        ]);

        $gestion = new gestion();
        $gestion->codigo = $request->tescodigo;
        $gestion->descripcion = $request->tesdescripcion;
        $gestion->f_inicio = $request->tesf_inicio;
        $gestion->f_final = $request->tesf_final;
        $gestion->estado = $request->tesestado;
        $gestion->save();

        Alert::message('Gestion agregada exitósamnte', 'success');

        return redirect()->route('tes.getGestion');
    }

    public function getAgregarPagos()
    {
        return view('tesoreria.pagos.agregarpagos');
    }

    public function postAgregarPagos(Request $request)
    {
        $this->validate($request, [
            'tescodigo'              => 'required',
            'tesdescripcion'         => 'required',
            'tesunidad_academica'    => 'required',
            'tesmonto'               => 'required',
            'tesmoneda'              => 'required',
            'tesnivel'               => 'required',
            'tescontrol_pago'        => 'required',
            'tesaplica_beca'         => 'required',
            'tesaplica_cantidad'     => 'required',
            'tesaplica_multa'        => 'required',
            'tesrubro'               => 'required',
            'tescategoria_programatica'=> 'required',

        ]);

        $pagos = new pagos();
        $pagos->codigo = $request->tescodigo;
        $pagos->descripcion = $request->tesdescripcion;
        $pagos->unidad_academica = $request->tesunidad_academica;
        $pagos->monto = $request->tesmonto;
        $pagos->moneda = $request->tesmoneda;
        $pagos->nivel = $request->tesnivel;
        $pagos->control_pago = $request->tescontrol_pago;
        $pagos->aplica_beca = $request->tesaplica_beca;
        $pagos->aplica_cantidad = $request->tesaplica_cantidad;
        $pagos->aplica_multa = $request->tesaplica_multa;
        $pagos->rubro = $request->tesrubro;
        $pagos->categoria_programatica = $request->tescategoria_programatica;
        $pagos->save();

        Alert::message('Pago agregado exitósamnte', 'success');

        return redirect()->route('tes.getPagos');
    }

    public function getAgregarCursos()
    {
        return view('tesoreria.cursos.agregarcursos');
    }

    public function postAgregarcursos(Request $request)
    {
        $this->validate($request, [
            'tescodigo'                     => 'required',
            'tesdescripcion'                => 'required',
            'tesrequisito_curso_anterior'   => 'required',
            'tesid_carrera'                 => 'required'
        ]);

        $cursos = new cursos();
        $cursos->codigo = $request->tescodigo;
        $cursos->descripcion = $request->tesdescripcion;
        $cursos->requisito_curso_anterior = $request->tesrequisito_curso_anterior;
        $cursos->id_carrera = $request->tesid_carrera;
        $cursos->save();

        Alert::message('Curso agregado exitósamnte', 'success');

        return redirect()->route('tes.getCursos');
    }

}
