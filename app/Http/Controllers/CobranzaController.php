<?php

namespace App\Http\Controllers;

use App\Entities\CatalogoCuentaemi;
use App\Entities\Co_Subcuenta;
use App\Entities\Co_Tipodocumento;
use App\Entities\Co_Tipomoneda;
use App\Entities\Contcomprobante;
use App\Entities\Contobjeto;
use App\Entities\Contregistro;
use App\Entities\Unidad;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Styde\Html\Facades\Alert;

class CobranzaController extends Controller
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

        return view('cobranzas.tescont.alumnos', compact('alumnos'));
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


   /// certificados

    public function getCertificado()
    {
        //$alumnos = Alumno::orderBy('paterno')
          //  ->orderBy('materno')
            //->orderBy('nombres')
            //->paginate(50);

        return view('cobranzas.accionescob.certificados', compact('alumnos'));
    }

///informe
    public function getInforme()
    {
        //$alumnos = Alumno::orderBy('paterno')
        //  ->orderBy('materno')
        //->orderBy('nombres')
        //->paginate(50);

        return view('cobranzas.accionescob.informes', compact('alumnos'));
    }

///MEMO

    public function getMemo()
    {
        //$alumnos = Alumno::orderBy('paterno')
        //  ->orderBy('materno')
        //->orderBy('nombres')
        //->paginate(50);

        return view('cobranzas.accionescob.memos', compact('alumnos'));
    }

    public function getNotificacion()
    {
        //$alumnos = Alumno::orderBy('paterno')
        //  ->orderBy('materno')
        //->orderBy('nombres')
        //->paginate(50);

        return view('cobranzas.accionescob.notificaciones', compact('alumnos'));
    }

    //MEDIDAS TOMADAS
///emails
    public function getEmail()
    {
        //$alumnos = Alumno::orderBy('paterno')
        //  ->orderBy('materno')
        //->orderBy('nombres')
        //->paginate(50);

        return view('cobranzas.medicob.emails', compact('alumnos'));
    }

    ///llamadas
    public function getLlamada()
    {
        //$alumnos = Alumno::orderBy('paterno')
        //  ->orderBy('materno')
        //->orderBy('nombres')
        //->paginate(50);

        return view('cobranzas.medicob.llamadas', compact('alumnos'));
    }
///sms
    public function getSms()
    {
        //$alumnos = Alumno::orderBy('paterno')
        //  ->orderBy('materno')
        //->orderBy('nombres')
        //->paginate(50);

        return view('cobranzas.medicob.smss', compact('alumnos'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function getCatalogoCuentasemi()
//{
//
//    $catalogocuentasemi = CatalogoCuentaemi::orderBy('codigo')->paginate(30);
//
//    return view('contabilidad.catalogocuentasemi', compact('catalogocuentasemi'));
//}
////nuevo//
//    public function getCo_Tipodocumentos()
//    {
//
//        $co_tipodocumentos = Co_Tipodocumento::orderBy('codigo')->paginate(30);
//
//        return view('contabilidad.co_tipodocumentos', compact('co_tipodocumentos'));
//    }
//    //nuevo//
//
//
//    public function getCo_Subcuentas()
//    {
//        $co_subcuentas = Co_Subcuenta::orderBy('codigo')->paginate(30);
//        return view('contabilidad.co_subcuentas', compact('co_subcuentas'));
//    }
//
//    public function getCo_Tipomonedas()
//    {
//        $co_tipomonedas = Co_Tipomoneda::orderBy('codigo')->paginate(30);
//        return view('contabilidad.co_tipomonedas', compact('co_tipomonedas'));
//    }
//
//
//    public function getHabilitacion($id_catalogocuentaemi)
//    {
//        $catalogocuentaemi = CatalogoCuentaemi::findOrFail($id_catalogocuentaemi);
//        if ($catalogocuentaemi->activo == true){
//            $catalogocuentaemi->activo = false;
//            Alert::message('Cuenta ' . $catalogocuentaemi->codigo . ' desactivada exitósamente', 'danger');
//        } else {
//            $catalogocuentaemi->activo = true;
//            Alert::message('Cuenta ' . $catalogocuentaemi->codigo . ' activada exitósamente', 'success');
//        }
//        $catalogocuentaemi->save();
//        return redirect()->route('contabilidad.getCatalogoCuentasemi');
//    }
//    public function getHabilitacionsubcuenta($id_co_subcuenta)
//    {
//        $co_subcuenta = Co_Subcuenta::findOrFail($id_co_subcuenta);
//        if ($co_subcuenta->activo == true){
//            $co_subcuenta->activo = false;
//            Alert::message('Cuenta ' . $co_subcuenta->codigo . ' desactivada exitósamente', 'danger');
//        } else {
//            $co_subcuenta->activo = true;
//            Alert::message('Cuenta ' . $co_subcuenta->codigo . ' activada exitósamente', 'success');
//        }
//        $co_subcuenta->save();
//        return redirect()->route('contabilidad.getCo_Subcuentas');
//    }
//
//    public function getModificarCatalogoCuentaemi($id_catalogocuentaemi)
//    {
//        $catalogocuentaemi = CatalogoCuentaemi::findOrFail($id_catalogocuentaemi);
//
//
//        return view('contabilidad.modificarcatalogocuentasemi',
//            compact('catalogocuentaemi'  ));
//    }
//
//    public function getModificarCo_Subcuenta($id_co_subcuenta)
//    {
//        $co_subcuenta = Co_Subcuenta::findOrFail($id_co_subcuenta);
//
//
//        return view('contabilidad.modificarco_subcuentas',
//            compact('co_subcuenta' ));
//    }
//
//    public function putModificarCatalogoCuentaemi(Request $request)
//    {
//
//        $this->validate($request, [
//            'contcodigo'       => ['required','numeric','min:1','max:99999',Rule::unique('catalogocuentasemi','codigo')->ignore($request->id,'id')],
//            'contdescripcion'    => 'required|min:2|max:100',
//        ]);
//        $cuenta = CatalogoCuentaemi::findOrFail($request->id);
//        $cuenta->codigo = $request->contcodigo;
//        $cuenta->descripcion = $request->contdescripcion;
//        $cuenta->save();
//
//        Alert::message('Cuenta  modificado exitósamnte', 'success');
//
//        return redirect()->route('contabilidad.getCatalogoCuentasemi');
//    }
//    public function putModificarCo_Subcuenta(Request $request)
//    {
//
//        $this->validate($request, [
//            'contcodigo'       => ['required','numeric','min:1','max:99999',Rule::unique('co_subcuentas','codigo')->ignore($request->id,'id')],
//            'contdescripcion'    => 'required|min:2|max:100',
//            'contdebe'    => ['required','numeric','min:1','max:99999',Rule::unique('co_subcuentas','debe')->ignore($request->id,'id')],
//            'conthaber'    => ['required','numeric','min:1','max:99999',Rule::unique('co_subcuentas','haber')->ignore($request->id,'id')],
//        ]);
//        $subcuenta = Co_Subcuenta::findOrFail($request->id);
//        $subcuenta->codigo = $request->contcodigo;
//        $subcuenta->descripcion = $request->contdescripcion;
//        $subcuenta->debe = $request->contdebe;
//        $subcuenta->haber = $request->conthaber;
//        $subcuenta->save();
//
//        Alert::message('SubCuenta  modificado exitósamnte', 'success');
//
//        return redirect()->route('contabilidad.getCo_Subcuentas');
//    }
//
//    public function getAgregarCatalogoCuentaemi()
//    {
//
//        return view('contabilidad.agregarcatalogocuentasemi');
//    }
//    public function getAgregarCo_Subcuenta()
//    {
//
//        return view('contabilidad.agregarco_subcuentas');
//    }
//
//    public function postAgregarCatalogoCuentaemi(Request $request)
//    {
//        $this->validate($request, [
//            'contcodigo'       => ['required','numeric','min:1','max:99999',Rule::unique('catalogocuentasemi','codigo')],
//            'contdescripcion'    => 'required|min:2|max:100',
//        ]);
//        $cuenta = new CatalogoCuentaemi;
//        $cuenta->codigo = $request->contcodigo;
//        $cuenta->descripcion = $request->contdescripcion;
//        $cuenta->save();
//
//        Alert::message('Cuenta  modificado exitósamnte', 'success');
//
//        return redirect()->route('contabilidad.getCatalogoCuentasemi');
//    }
//
//    public function postAgregarCo_Subcuenta(Request $request)
//    {
//        $this->validate($request, [
//            'contcodigo'       => ['required','numeric','min:1','max:99999',Rule::unique('co_subcuentas','codigo')],
//            'contdescripcion'    => 'required|min:2|max:100',
//            'contdebe'    => ['required','numeric','min:1','max:99999',Rule::unique('co_subcuentas','debe')],
//            'conthaber'    => ['required','numeric','min:1','max:99999',Rule::unique('co_subcuentas','haber')],
//        ]);
//        $subcuenta = new Co_Subcuenta();
//        $subcuenta->codigo = $request->contcodigo;
//        $subcuenta->descripcion = $request->contdescripcion;
//        $subcuenta->debe = $request->contdebe;
//        $subcuenta->haber = $request->conthaber;
//        $subcuenta->save();
//
//        Alert::message('SubCuenta  modificado exitósamnte', 'success');
//
//        return redirect()->route('contabilidad.getCo_Subcuentas');
//    }




    // seoane


//    public function getObjetos()
//    {
//        $objetos = Contobjeto::orderBy('tipo')->paginate(50);
//
//        return view('contabilidad.objetos.objetos', compact('objetos'));
//    }
//
//    public function getAgregarObjeto()
//    {
//        $tipo = [
//            '1' => 'REPARTICION',
//            '2' => 'CUENTA',
//            '3' => 'SUBCUENTA'
//        ];
//
//        return view('contabilidad.objetos.agregarobjeto', compact('tipo'));
//    }
//
//    public function postAgregarObjeto(Request $request)
//    {
//        $this->validate($request, [
//            'contipo'   => 'required',
//            'concodigo' => 'required',
//            'condetalle' => 'required'
//        ]);
//
//        $objeto = new Contobjeto;
//        $objeto->tipo = $request->contipo;
//        $objeto->nombre = $request->concodigo;
//        $objeto->detalle = $request->condetalle;
//        $objeto->save();
//
//        Alert::message('Objeto agregado exitósamnte', 'success');
//
//        return redirect()->route('contabilidad.getObjetos');
//    }
//
//
//
//
//    // comprobantes
//
//    //comprobantes de ingresos
//
//    public function getComprobantesIngreso()
//    {
//        $comprobantes = Contcomprobante::where('tipo', '1')
//            ->paginate(50);
//
//        return view('contabilidad.compingresos.compingresos', compact('comprobantes'));
//    }
//
//    public function getAgregarComprobanteIngreso()
//    {
//        $unidades = Unidad::pluck('unidad', 'id');
//
//        return view('contabilidad.compingresos.agregarcompingreso', compact('unidades'));
//    }
//
//    public function postAgregarComprobanteIngreso(Request $request)
//    {
//        $this->validate($request, [
//            'confuente' => 'required',
//            'condocref' => 'required',
//            'contcambio' => 'required',
//            'confecha'  => 'required',
//            'conid_unidad' => 'required',
//            'conglosa'  => 'required',
//            'coninteresados' => 'required'
//        ]);
//
//        $comp = new Contcomprobante;
//        $comp->tipo = '1';
//        $comp->fuente = $request->confuente;
//        $comp->fecha = Carbon::createFromFormat('d/m/Y', $request->confecha)->format('Y-m-d');
//        $comp->id_unidad = $request->conid_unidad;
//        $comp->glosa = $request->conglosa;
//        $comp->interesado = $request->interesados;
//        $comp->docref = $request->condocref;
//        $comp->cheque = $request->concheque;
//        $comp->tcambio = $request->contcambio;
//        $comp->save();
//
//        Alert::message('Objeto agregado exitósamnte', 'success');
//
//        return redirect()->route('contabilidad.getComprobantesIngreso');
//    }
//
//    public function getDetalleCI($id_comprobante)
//    {
//        $comprobante = Contcomprobante::findOrFail($id_comprobante);
//        $registros = Contregistro::where('id_contcomprobante', $comprobante->id)->get();
//
//        $sumadebe = Contregistro::where('id_contcomprobante', $comprobante->id)
//            ->where('tiporeg', 'debe')
//            ->get()
//            ->sum('valor');
//
//        $sumahaber = Contregistro::where('id_contcomprobante', $comprobante->id)
//            ->where('tiporeg', 'haber')
//            ->get()
//            ->sum('valor');
//
//        return view('contabilidad.compingresos.detallecomping', compact('comprobante', 'registros', 'sumadebe', 'sumahaber'));
//    }
//
//    public function getAgregarDetalleCI($id_comprobante)
//    {
//        $comprobante = Contcomprobante::findOrFail($id_comprobante);
//
//        $objetos = Contobjeto::pluck('detalle', 'id');
//        $tiporeg = ['debe' => 'DEBE', 'haber' => 'HABER'];
//
//        return view('contabilidad.compingresos.agregarregistrocompingreso', compact('comprobante', 'objetos', 'tiporeg'));
//    }
//
//    public function postAgregarDetalleCI(Request $request)
//    {
//        $this->validate($request, [
//            'id_comprobante' => 'required',
//            'conid_objeto'  => 'required',
//            'contipo'       => 'required',
//            'concantidad'   => 'required|min:0'
//        ]);
//
//        $registro = new Contregistro;
//        $registro->id_contcomprobante = $request->id_comprobante;
//        $registro->id_contobjeto = $request->conid_objeto;
//        $registro->valor = $request->concantidad;
//        $registro->tiporeg = $request->contipo;
//        $registro->save();
//
//        Alert::message('Objeto agregado exitósamnte', 'success');
//
//        return redirect()->route('contabilidad.getDetalleCI', $request->id_comprobante);
//    }
//
//    //comprobantes de egresos
//
//    public function getComprobantesEgreso()
//    {
//        $comprobantes = Contcomprobante::where('tipo', '2')
//            ->paginate(50);
//
//        return view('contabilidad.compegresos.compegresos', compact('comprobantes'));
//    }
//
//    public function getAgregarComprobanteEgreso()
//    {
//        $unidades = Unidad::pluck('unidad', 'id');
//
//        return view('contabilidad.compegresos.agregarcompegreso', compact('unidades'));
//    }
//
//    public function postAgregarComprobanteEgreso(Request $request)
//    {
//        $this->validate($request, [
//            'confuente' => 'required',
//            'condocref' => 'required',
//            'contcambio' => 'required',
//            'confecha'  => 'required',
//            'conid_unidad' => 'required',
//            'conglosa'  => 'required',
//            'coninteresados' => 'required'
//        ]);
//
//        $comp = new Contcomprobante;
//        $comp->tipo = '2';
//        $comp->fuente = $request->confuente;
//        $comp->fecha = Carbon::createFromFormat('d/m/Y', $request->confecha)->format('Y-m-d');
//        $comp->id_unidad = $request->conid_unidad;
//        $comp->glosa = $request->conglosa;
//        $comp->interesado = $request->interesados;
//        $comp->docref = $request->condocref;
//        $comp->cheque = $request->concheque;
//        $comp->tcambio = $request->contcambio;
//        $comp->save();
//
//        Alert::message('Objeto agregado exitósamnte', 'success');
//
//        return redirect()->route('contabilidad.getComprobantesEgreso');
//    }
//
//    public function getDetalleCE($id_comprobante)
//    {
//        $comprobante = Contcomprobante::findOrFail($id_comprobante);
//        $registros = Contregistro::where('id_contcomprobante', $comprobante->id)->get();
//
//        $sumadebe = Contregistro::where('id_contcomprobante', $comprobante->id)
//            ->where('tiporeg', 'debe')
//            ->get()
//            ->sum('valor');
//
//        $sumahaber = Contregistro::where('id_contcomprobante', $comprobante->id)
//            ->where('tiporeg', 'haber')
//            ->get()
//            ->sum('valor');
//
//        return view('contabilidad.compegresos.detallecompeg', compact('comprobante', 'registros', 'sumadebe', 'sumahaber'));
//    }
//
//    public function getAgregarDetalleCE($id_comprobante)
//    {
//        $comprobante = Contcomprobante::findOrFail($id_comprobante);
//
//        $objetos = Contobjeto::pluck('detalle', 'id');
//        $tiporeg = ['debe' => 'DEBE', 'haber' => 'HABER'];
//
//        return view('contabilidad.compegresos.agregarregistrocompegreso', compact('comprobante', 'objetos', 'tiporeg'));
//    }
//
//    public function postAgregarDetalleCE(Request $request)
//    {
//        $this->validate($request, [
//            'id_comprobante' => 'required',
//            'conid_objeto'  => 'required',
//            'contipo'       => 'required',
//            'concantidad'   => 'required|min:0'
//        ]);
//
//        $registro = new Contregistro;
//        $registro->id_contcomprobante = $request->id_comprobante;
//        $registro->id_contobjeto = $request->conid_objeto;
//        $registro->valor = $request->concantidad;
//        $registro->tiporeg = $request->contipo;
//        $registro->save();
//
//        Alert::message('Objeto agregado exitósamnte', 'success');
//
//        return redirect()->route('contabilidad.getDetalleCE', $request->id_comprobante);
//    }
//
//    //comprobantes de traspasos
//
//    public function getComprobantesTraspaso()
//    {
//        $comprobantes = Contcomprobante::where('tipo', '3')
//            ->paginate(50);
//
//        return view('contabilidad.comptraspasos.comptraspasos', compact('comprobantes'));
//    }
//
//    public function getAgregarComprobanteTraspaso()
//    {
//        $unidades = Unidad::pluck('unidad', 'id');
//
//        return view('contabilidad.comptraspasos.agregarcomptraspaso', compact('unidades'));
//    }
//
//    public function postAgregarComprobanteTraspaso(Request $request)
//    {
//        $this->validate($request, [
//            'confuente' => 'required',
//            'condocref' => 'required',
//            'contcambio' => 'required',
//            'confecha'  => 'required',
//            'conid_unidad' => 'required',
//            'conglosa'  => 'required',
//            'coninteresados' => 'required'
//        ]);
//
//        $comp = new Contcomprobante;
//        $comp->tipo = '3';
//        $comp->fuente = $request->confuente;
//        $comp->fecha = Carbon::createFromFormat('d/m/Y', $request->confecha)->format('Y-m-d');
//        $comp->id_unidad = $request->conid_unidad;
//        $comp->glosa = $request->conglosa;
//        $comp->interesado = $request->interesados;
//        $comp->docref = $request->condocref;
//        $comp->cheque = $request->concheque;
//        $comp->tcambio = $request->contcambio;
//        $comp->save();
//
//        Alert::message('Objeto agregado exitósamnte', 'success');
//
//        return redirect()->route('contabilidad.getComprobantesTraspaso');
//    }
//
//    public function getDetalleCT($id_comprobante)
//    {
//        $comprobante = Contcomprobante::findOrFail($id_comprobante);
//        $registros = Contregistro::where('id_contcomprobante', $comprobante->id)->get();
//
//        $sumadebe = Contregistro::where('id_contcomprobante', $comprobante->id)
//            ->where('tiporeg', 'debe')
//            ->get()
//            ->sum('valor');
//
//        $sumahaber = Contregistro::where('id_contcomprobante', $comprobante->id)
//            ->where('tiporeg', 'haber')
//            ->get()
//            ->sum('valor');
//
//        return view('contabilidad.comptraspasos.detallecomptra', compact('comprobante', 'registros', 'sumadebe', 'sumahaber'));
//    }
//
//    public function getAgregarDetalleCT($id_comprobante)
//    {
//        $comprobante = Contcomprobante::findOrFail($id_comprobante);
//
//        $objetos = Contobjeto::pluck('detalle', 'id');
//        $tiporeg = ['debe' => 'DEBE', 'haber' => 'HABER'];
//
//        return view('contabilidad.comptraspasos.agregarregistrocomptraspaso', compact('comprobante', 'objetos', 'tiporeg'));
//    }
//
//    public function postAgregarDetalleCT(Request $request)
//    {
//        $this->validate($request, [
//            'id_comprobante' => 'required',
//            'conid_objeto'  => 'required',
//            'contipo'       => 'required',
//            'concantidad'   => 'required|min:0'
//        ]);
//
//        $registro = new Contregistro;
//        $registro->id_contcomprobante = $request->id_comprobante;
//        $registro->id_contobjeto = $request->conid_objeto;
//        $registro->valor = $request->concantidad;
//        $registro->tiporeg = $request->contipo;
//        $registro->save();
//
//        Alert::message('Objeto agregado exitósamnte', 'success');
//
//        return redirect()->route('contabilidad.getDetalleCT', $request->id_comprobante);
//    }
//
//
///// libro mayor
//    public function getLibroMayor()
//    {
//        $registros = Contregistro::where('valor', '>', 0)
//            ->get();
//
//        $sumadebe = Contregistro::where('valor', '>', 0)
//            ->where('tiporeg', 'debe')
//            ->get()
//            ->sum('valor');
//        $sumahaber = Contregistro::where('valor', '>', 0)
//            ->where('tiporeg', 'haber')
//            ->get()
//            ->sum('valor');
//
//        return view('contabilidad.libromayor', compact('registros', 'sumadebe', 'sumahaber'));
//    }
//
//
//    //sumas y saldos
//
//    public function getSumasySaldos()
//    {
//        return view('contabilidad.sumasysaldos.compsumasysaldos');
//    }
//
//    public function getBalanceGenerales()
//    {
//        return view('contabilidad.balancesgenerales.compbalancesgenerales');
//    }
}
