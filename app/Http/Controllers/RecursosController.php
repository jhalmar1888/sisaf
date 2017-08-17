<?php

namespace App\Http\Controllers;

use App\Entities\Caracteristica;
use App\Entities\Cargo;
use App\Entities\Ciudad;
use App\Entities\Computacion;
use App\Entities\Curso;
use App\Entities\Empleado;
use App\Entities\EstadoCivil;
use App\Entities\Estudiosps;
use App\Entities\Estudiossup;
use App\Entities\Experiencia;
use App\Entities\Otrosdoc;
use App\Entities\Persona;
use App\Entities\Refpersonal;
use App\Entities\Rhmes;
use App\Entities\Rhplanilla;
use App\Entities\Sangre;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class RecursosController extends Controller
{
    public function getCargos()
    {
        $cargos = Cargo::orderBy('cargo')
            ->paginate(100);

        return view('rrhh.cargos.cargos', compact('cargos'));
    }

    public function getAgregarCargo()
    {
        return view('rrhh.cargos.agregarcargo');
    }

    public function postAgregarCargo(Request $request)
    {
        $this->validate($request, [
            'rhcargo'   => 'required|unique:cargos,cargo'
        ]);

        $cargo = new Cargo;
        $cargo->cargo = $request->rhcargo;
        $cargo->save();

        Alert::message('Cargo agregado exitósamente', 'success');

        return redirect()->route('rh.getCargos');
    }


    public function getPersonas()
    {
        $personas = Persona::orderBy('paterno')
            ->orderBy('materno')
            ->orderBy('nombres')
            ->paginate(30);

        return view('rrhh.personas.personas', compact('personas'));
    }

    public function getAgregarPersona()
    {
        $tiposangre = Sangre::pluck('tiposangre', 'id');
        $genero = [
            'masculino' => 'Masculino',
            'femenino'  => 'Femenino'
        ];
        $estadocivil = EstadoCivil::pluck('estadocivil', 'id');
        $ciudades = Ciudad::pluck('ciudad', 'id');

        return view('rrhh.personas.agregarpersona', compact('tiposangre', 'genero', 'estadocivil', 'ciudades'));
    }

    public function postAgregarPersona(Request $request)
    {
        $this->validate($request, [
            'rhci'          => 'required|unique:personas,ci',
            'rhid_ciudad'   => 'required',
            'rhnombres'     => 'required',
            'rhfnacimiento' => 'required',
            'rhlugar'       => 'required',
            'rhid_sangre'   => 'required',
            'rhid_genero'   => 'required',
            'rhid_estadocivil'  => 'required',
            'rhtelefono'    => 'required|numeric|min:1000',
            'rhdireccion'   => 'required',
            'rhnacionalidad' => 'required'
        ]);

        $persona = new Persona;
        $persona->ci = $request->rhci;
        $persona->paterno = $request->rhpaterno;
        $persona->materno = $request->rhmaterno;
        $persona->nombres = $request->rhnombres;
        $persona->exp = $request->rhid_ciudad;
        $persona->fechanacimiento = Carbon::createFromFormat('d/m/Y', $request->rhfnacimiento)->format('y-m-d');
        $persona->lugarnacimiento = $request->rhlugar;
        $persona->id_sangre = $request->rhid_sangre;
        $persona->genero = $request->rhid_genero;
        $persona->id_estadocivil = $request->rhid_estadocivil;
        $persona->telefono = $request->rhtelefono;
        $persona->direccion = $request->rhdireccion;
        $persona->nacionalidad = $request->rhnacionalidad;
        $persona->save();

        Alert::message('Cargo agregado exitósamente', 'success');

        return redirect()->route('rh.getPersonas');
    }


    public function getEmpleados()
    {
        $empleados = Empleado::paginate(50);

        return view('rrhh.empleados.empleados', compact('empleados'));
    }

    public function getAgregarEmpleado()
    {
        $personas = Persona::orderBy('paterno')->pluck('paterno', 'id');
        $cargos = Cargo::pluck('cargo', 'id');
        $afp = [
            'pre'   => 'AFP Prevision',
            'fut'   => 'AFP Futuro'
        ];
        $contrato = [
            'item'  => 'Permanente',
            'eventual' => 'Eventual',
            'consultor' => 'Consultor en Linea'
        ];

        return view('rrhh.empleados.agregarempleado', compact('personas', 'cargos', 'afp', 'contrato'));
    }

    public function postAgregarEmpleado(Request $request)
    {
        $this->validate($request, [
            'rhid_persona'  => 'required',
            'rhcodigo'      => 'required',
            'rhid_afp'      => 'required',
            'rhcuentabancaria'  => 'required',
            'rhfingreso'    => 'required',
            'rhid_mcontrato'    => 'required',
            'rhid_cargo'    => 'required',
            'rhhbasico'     => 'required'
        ]);

        $empleado = new Empleado;
        $empleado->id_persona = $request->rhid_persona;
        $empleado->codigo = $request->rhcodigo;
        $empleado->afp = $request->rhid_afp;
        $empleado->cuentabancaria = $request->rhcuentabancaria;
        $empleado->fingreso = Carbon::createFromFormat('d/m/Y', $request->rhfingreso)->format('Y-m-d');
        $empleado->mcontrato = $request->rhid_mcontrato;
        $empleado->id_cargo = $request->rhid_cargo;
        $empleado->hbasico = $request->rhhbasico;
        $empleado->save();

        Alert::message('Empleado agregado exitósamente', 'success');

        return redirect()->route('rh.getEmpleados');
    }


    public function getAgregarEstudiosps()
    {
        $personas = Persona::orderBy('paterno')->pluck('paterno', 'id');

        return view('rrhh.estudiosps.agregarestudiosps', compact('personas'));
    }

    public function postAgregarEstudiosps(Request $request)
    {
        $this->validate($request, [
            'rhid_persona'  => 'required',
            'rhestudios'    => 'required'
        ]);

        $estudios = new Estudiosps;
        $estudios->id_persona = $request->rhid_persona;
        $estudios->estudios = $request->rhestudios;
        $estudios->save();

        Alert::message('Estudios Primarios y Secundarios agregado exitósamente', 'success');

        return redirect()->route('rh.getEmpleados');
    }

    public function getHojaVida($id_persona)
    {
        $estudiosps = Estudiosps::where('id_persona', $id_persona)->get();
        $estudiossup = Estudiossup::where('id_persona', $id_persona)->get();
        $cursos = Curso::where('id_persona', $id_persona)->get();
        $experiencias = Experiencia::where('id_persona', $id_persona)->get();
        $computaciones = Computacion::where('id_persona', $id_persona)->get();
        $caracteristicas = Caracteristica::where('id_persona', $id_persona)->get();
        $otros = Otrosdoc::where('id_persona', $id_persona)->get();
        $refpersonales = Refpersonal::where('id_persona', $id_persona)->get();
        $persona = Persona::findOrFail($id_persona);

        return view('rrhh.hojavida.hojavida', compact('persona', 'estudiosps', 'estudiossup', 'cursos', 'experiencias', 'computaciones', 'caracteristicas', 'otros', 'refpersonales'));
    }

    public function getAgregarEstudiossup()
    {
        $personas = Persona::orderBy('paterno')->pluck('paterno', 'id');

        return view('rrhh.estudiossup.agregarestudiossup', compact('personas'));
    }

    public function postAgregarEstudiossup(Request $request)
    {
        $this->validate($request, [
            'rhid_persona'  => 'required',
            'rhtitulo'    => 'required',
            'rhfacultad'    => 'required',
            'rhuniversidad'    => 'required'
        ]);

        $estudiosup = new Estudiossup;
        $estudiosup->id_persona = $request->rhid_persona;
        $estudiosup->titulo = $request->rhtitulo;
        $estudiosup->facultad = $request->rhfacultad;
        $estudiosup->universidad = $request->rhuniversidad;
        $estudiosup->save();

        Alert::message('Estudios Superiores agregado exitósamente', 'success');

        return redirect()->route('rh.getEmpleados');
    }

    public function getAgregarCursos()
    {
        $personas = Persona::orderBy('paterno')->pluck('paterno', 'id');

        return view('rrhh.cursos.agregarcurso', compact('personas'));
    }

    public function postAgregarCursos(Request $request)
    {
        $this->validate($request, [
            'rhid_persona'  => 'required',
            'rhcurso'    => 'required'
        ]);

        $estudiosup = new Curso;
        $estudiosup->id_persona = $request->rhid_persona;
        $estudiosup->curso = $request->rhcurso;
        $estudiosup->save();

        Alert::message('Curso Asistido agregado exitósamente', 'success');

        return redirect()->route('rh.getEmpleados');
    }

    public function getAgregarExperiencia()
    {
        $personas = Persona::orderBy('paterno')->pluck('paterno', 'id');

        return view('rrhh.experiencias.agregarexperiencia', compact('personas'));
    }

    public function postAgregarExperiencia(Request $request)
    {
        $this->validate($request, [
            'rhid_persona'  => 'required',
            'rhexperiencia'    => 'required'
        ]);

        $estudiosup = new Experiencia;
        $estudiosup->id_persona = $request->rhid_persona;
        $estudiosup->experiencia = $request->rhexperiencia;
        $estudiosup->save();

        Alert::message('Experiencia Laboral agregado exitósamente', 'success');

        return redirect()->route('rh.getEmpleados');
    }

    public function getAgregarComputacion()
    {
        $personas = Persona::orderBy('paterno')->pluck('paterno', 'id');

        return view('rrhh.computacion.agregarcomputacion', compact('personas'));
    }

    public function postAgregarComputacion(Request $request)
    {
        $this->validate($request, [
            'rhid_persona'  => 'required',
            'rhcomputacion'    => 'required'
        ]);

        $estudiosup = new Computacion;
        $estudiosup->id_persona = $request->rhid_persona;
        $estudiosup->computacion = $request->rhcomputacion;
        $estudiosup->save();

        Alert::message('Computacion agregado exitósamente', 'success');

        return redirect()->route('rh.getEmpleados');
    }

    public function getAgregarCaracteristicas()
    {
        $personas = Persona::orderBy('paterno')->pluck('paterno', 'id');

        return view('rrhh.caracteristicas.agregarcaracteristicas', compact('personas'));
    }

    public function postAgregarCaracteristicas(Request $request)
    {
        $this->validate($request, [
            'rhid_persona'  => 'required',
            'rhcaracteristica'    => 'required'
        ]);

        $estudiosup = new Caracteristica;
        $estudiosup->id_persona = $request->rhid_persona;
        $estudiosup->caracteristica = $request->rhcaracteristica;
        $estudiosup->save();

        Alert::message('Caracteristica Personal agregado exitósamente', 'success');

        return redirect()->route('rh.getEmpleados');
    }

    public function getAgregarOtros()
    {
        $personas = Persona::orderBy('paterno')->pluck('paterno', 'id');

        return view('rrhh.otros.agregarotros', compact('personas'));
    }

    public function postAgregarOtros(Request $request)
    {
        $this->validate($request, [
            'rhid_persona'  => 'required',
            'rhotros'    => 'required'
        ]);

        $estudiosup = new Otrosdoc;
        $estudiosup->id_persona = $request->rhid_persona;
        $estudiosup->otros = $request->rhotros;
        $estudiosup->save();

        Alert::message('Otros Documentos agregados exitósamente', 'success');

        return redirect()->route('rh.getEmpleados');
    }

    public function getAgregarReferencias()
    {
        $personas = Persona::orderBy('paterno')->pluck('paterno', 'id');

        return view('rrhh.refpersonales.agregarrefpersonal', compact('personas'));
    }

    public function postAgregarReferencias(Request $request)
    {
        $this->validate($request, [
            'rhid_persona'  => 'required',
            'rhref'    => 'required'
        ]);

        $estudiosup = new Refpersonal;
        $estudiosup->id_persona = $request->rhid_persona;
        $estudiosup->referencias = $request->rhref;
        $estudiosup->save();

        Alert::message('Referencias Personales agregados exitósamente', 'success');

        return redirect()->route('rh.getEmpleados');
    }

    /********** para las planillas ***********/

    public function getMeses()
    {
        $meses = Rhmes::paginate(50);

        return view('rrhh.meses.meses', compact('meses'));
    }

    public function getAgregarMes()
    {
        return view('rrhh.meses.agregarmes');
    }

    public function postAgregarMes(Request $request)
    {
        $this->validate($request, [
            'rhmes' => 'required'
        ]);

        $mes = new Rhmes;
        $mes->mes = $request->rhmes;
        $mes->save();

        Alert::message('Mes agregados exitósamente', 'success');

        return redirect()->route('rh.getMeses');
    }

    public function getAgregarPlanilla()
    {
        $meses = Rhmes::pluck('mes', 'id');
        $personas = Persona::orderBy('paterno')->pluck('paterno', 'id');

        return view('rrhh.planillas.agregarplanilla', compact('meses', 'personas'));
    }

    public function postAgregarPlanilla(Request $request)
    {
        $this->validate($request, [
            'rhid_mes'  => 'required',
            'rhid_persona' => 'required',
            'rhdias'    => 'required|numeric|min:0',
            'rhreintegro'   => 'required',
            'rhprestamo'    => 'required',
            'rhatrasos'     => 'required',
            'rhotros'       => 'required',
            'rhfdia'        => 'required|min:0',
            'rhfmes'        => 'required|min:0',
            'rhfano'        => 'required|min:0',
            'rhsalario'     => 'required|min:0'
        ]);

        $planilla = new Rhplanilla;
        $planilla->id_rhmes = $request->rhid_mes;
        $planilla->id_persona = $request->rhid_persona;
        $planilla->dias = $request->rhdias;
        $planilla->fdia = $request->rhfdia;
        $planilla->fmes = $request->rhfmes;
        $planilla->fano = $request->rhfano;
        $planilla->reintegro = $request->rhreintegro;
        $planilla->salariobasico = $request->rhsalario;
        $planilla->prestamo = $request->rhprestamo;
        $planilla->atrasos = $request->rhatrasos;
        $planilla->otros = $request->rhotros;
        $planilla->save();

        Alert::message('Planilla agregada exitósamente', 'success');

        return redirect()->route('rh.getMeses');
    }

    public function getPlanilla($id_mes)
    {
        $mes = Rhmes::findOrFail($id_mes);
        $planillas = Rhplanilla::where('id_rhmes', $id_mes)
            ->get();

        return view('rrhh.planillas.planilla', compact('mes', 'planillas'));
    }

    public function getPlanillaDetalle($id_mes)
    {
        $mes = Rhmes::findOrFail($id_mes);
        $planillas = Rhplanilla::where('id_rhmes', $id_mes)
            ->get();

        return view('rrhh.planillas.planilladetalle', compact('mes', 'planillas'));
    }
}
