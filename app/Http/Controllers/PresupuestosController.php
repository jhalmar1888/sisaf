<?php

namespace App\Http\Controllers;

use App\Entities\Prcomprobante;
use App\Entities\Probjeto;
use App\Entities\Prregistro;
use App\Entities\Unidad;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

class PresupuestosController extends Controller
{
    public function getObjetos()
    {
        $objetos = Probjeto::orderBy('tipo')
            ->paginate(30);

        return view('presupuestos.objetos.objetos', compact('objetos'));
    }

    public function getAgregarObjeto()
    {
        $tipo = [
            '1' => 'REPARTICION',
            '2' => 'CATPROG',
            '3' => 'PARTIDA'
        ];

        return view('presupuestos.objetos.agregarobjeto', compact('tipo'));
    }

    public function postAgregarObjeto(Request $request)
    {
        $this->validate($request, [
            'pretipo'   => 'required',
            'prenombre' => 'required|unique:probjetos,nombre',
            'predetalle' => 'required'
        ]);

        $objeto = new Probjeto;
        $objeto->tipo = $request->pretipo;
        $objeto->nombre = $request->prenombre;
        $objeto->detalle = $request->predetalle;
        $objeto->save();

        Alert::message('Objeto agregado exitósamente', 'success');

        return redirect()->route('presupuestos.getObjetos');
    }

    public function getCFPG()
    {
        $comprobantes = Prcomprobante::where('tipoc', '1')
            ->paginate(50);

        return view('presupuestos.cfpg.cfpg', compact('comprobantes'));
    }

    public function getAgregarCFPG()
    {
        $unidades = Unidad::all()
            ->pluck('unidad', 'id');

        return view('presupuestos.cfpg.agregarcfpg', compact('unidades'));
    }

    public function postAgregarCFPG(Request $request)
    {
        $this->validate($request, [
            'prefcto'   => 'required',
            'prefuente' => 'required',
            'prefecha'  => 'required',
            'preid_unidad' => 'required',
            'preglosa'  => 'required'
        ]);

        $cfpg = new Prcomprobante;
        $cfpg->fcto = $request->prefcto;
        $cfpg->fuente = $request->prefuente;
        $cfpg->fechac = Carbon::createFromFormat('d/m/Y', $request->prefecha)->format('Y-m-d');
        $cfpg->glosa = $request->preglosa;
        $cfpg->save();

        Alert::message('Comprobante agregado exitósamente', 'success');

        return redirect()->route('presupuestos.getCFPG');
    }

    public function getDetalleCFPG($id_comprobante)
    {
        $comprobante = Prcomprobante::findOrFail($id_comprobante);
        $registros = Prregistro::where('id_prcomprobante', $id_comprobante)
            ->get();
        $suma = Prregistro::where('id_prcomprobante', $id_comprobante)
            ->sum('valor');

        return view('presupuestos.cfpg.cfpgregistros',compact('comprobante', 'registros', 'suma'));
    }

    public function getAgregarDetalleCFPG($id_comprobante)
    {
        $comprobante = Prcomprobante::findOrFail($id_comprobante);
        $objetos = Probjeto::select('id', 'detalle')
            ->orderBy('detalle')
            ->pluck('detalle', 'id');

        return view('presupuestos.cfpg.agregarregistrocfpg', compact('comprobante', 'objetos'));
    }

    public function postAgregarDetalleCFPG(Request $request)
    {
        $this->validate($request, [
            'id_comprobante'    => 'required',
            'preid_objeto'      => 'required',
            'precantidad'       => 'required|numeric|min:0'
        ]);

        $registro = new Prregistro;

        $registro->id_prcomprobante = $request->id_comprobante;
        $registro->id_probjeto = $request->preid_objeto;
        $registro->valor = $request->precantidad;
        $registro->save();

        Alert::message('Regisrto agregado exitósamente', 'success');

        return redirect()->route('presupuestos.getDetalleCFPG', $request->id_comprobante);
    }
}
