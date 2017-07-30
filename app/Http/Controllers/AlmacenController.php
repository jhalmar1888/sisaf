<?php

namespace App\Http\Controllers;

use App\Entities\ComprobanteIngreso;
use App\Entities\KardexCentral;
use App\Entities\KardexIngreso;
use App\Entities\Material;
use App\Entities\Partida;
use App\Entities\Proveedor;
use App\Entities\TipoUnidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Styde\Html\Facades\Alert;

class AlmacenController extends Controller
{
    /********** para los articulos **************/

    public function getArticulos()
    {
        $articulos = Material::paginate(50);

        return view('almacenes.articulos.articulos', compact('articulos'));
    }

    public function getAgregarArticulo()
    {
        $partidas = Partida::pluck('partida', 'id');
        $tipounidades = TipoUnidad::pluck('tipo', 'id');

        return view('almacenes.articulos.agregararticulo', compact('partidas', 'tipounidades'));
    }

    public function postAgregarArticulo(Request $request)
    {
        $this->validate($request, [
            'almcodigo' => 'required',
            'almid_partida' => 'required',
            'almdescripcion'    => 'required',
            'almtipounidad'     => 'required',
            'almpusf'           => 'required',
            'almpucf'           => 'required'
        ]);

        $material = new Material;
        $material->codigo = $request->almcodigo;
        $material->id_partida = $request->almid_partida;
        $material->descripcion = $request->almdescripcion;
        $material->id_tipounidad = $request->almtipounidad;
        $material->pusf = $request->almpusf;
        $material->pucf = $request->almpucf;
        $material->save();

        Alert::message('Articulo agergado exitósamnte', 'success');

        return redirect()->route('almacen.getArticulos');
    }

    public function getModificarArticulo($id_articulo)
    {
        
    }

    public function postModificarArticulo(Request $request)
    {
        
    }
    
    /**************** para los almacenes **************/

    public function getAlmacenes()
    {
        $almacenes = KardexCentral::paginate(30);

        return view('almacenes.movimientos.almacencentral', compact('almacenes'));
    }

    public function getComprobantesIngreso()
    {
        $compingresos = ComprobanteIngreso::paginate(50);

        return view('almacenes.movimientos.comprobantesingreso', compact('compingresos'));
    }

    public function getAgregarComprobanteIngreso()
    {
        $proveedores = Proveedor::pluck('proveedor', 'id');

        return view('almacenes.movimientos.agregarcomprobanteingreso', compact('proveedores'));
    }

    public function postAgregarComprobanteIngreso(Request $request)
    {
        $this->validate($request, [
            'almid_proveedor'   => 'required',
            'almfecha'  => 'required',
            'almcontacto' => 'required',
            'almnfactura' => 'required'
        ]);

        $compingreso = new ComprobanteIngreso;
        $compingreso->id_proveedor = $request->almid_proveedor;
        $compingreso->nfactura = $request->almnfactura;
        $compingreso->fecha = $request->almfecha;
        $compingreso->contactoproveedor = $request->almcontacto;
        $compingreso->save();

        Alert::message('Comprobante agergado exitósamnte', 'success');

        return redirect()->route('almacen.getComprobantesIngreso');
    }

    public function getComprobanteIngresoKardex($id_compingreso)
    {
        $comprobante = ComprobanteIngreso::findOrFail($id_compingreso);
        $articulos = KardexIngreso::where('id_compingresos', $id_compingreso)
            ->get();

        return view('almacenes.movimientos.comprobantesingresokardex', compact('comprobante', 'articulos'));
    }

    public function getAgregarArticuloCI($id_compingreso)
    {
        $comprobante = ComprobanteIngreso::findOrFail($id_compingreso);
        $articulos = Material::pluck('descripcion', 'id');

        return view('almacenes.movimientos.agregararticulocomprobanteingreso', compact('comprobante', 'articulos'));
    }

    public function postAgregarArticuloCI(Request $request)
    {
        $this->validate($request, [
            'id_compingreso'    => 'required',
            'almid_articulo'    => 'required',
            'almcantidad'       => 'required'
        ]);

        $articulo = KardexCentral::where('id_material', $request->almid_articulo)->first();
        if ($articulo)
        {
            $articulo->cantidad = $articulo->cantidad + $request->almcantidad;
            $articulo->save();
        }
        else
        {
            $articulo = new KardexCentral;
            $articulo->id_material = $request->almid_articulo;
            $articulo->cantidad = $request->almcantidad;
            $articulo->save();
        }

        $art = Material::findOrFail($request->almid_articulo);
        $comprobante = new KardexIngreso;
        $comprobante->id_compingresos = $request->id_compingreso;
        $comprobante->id_material = $request->almid_articulo;
        $comprobante->cantidades = $request->almcantidad;
        $comprobante->ptotal = $art->pusf * $request->almcantidad;
        $comprobante->save();

        Alert::message('Articulo agregado exitósamnte', 'success');

        return redirect()->route('almacen.getComprobanteIngresoKardex', $request->id_compingreso);
    }

    /***** para los proveedores ************/

    public function getProveedores()
    {
        $proveedores = Proveedor::paginate(50);

        return view('almacenes.proveedores.proveedores', compact('proveedores'));
    }

    public function getAgregarProveedor()
    {
        return view('almacenes.proveedores.agregarproveedor');
    }

    public function postAgregarProveedor(Request $request)
    {
        $this->validate($request, [
            'almproveedor' => 'required'
        ]);

        $proveedor = new Proveedor;
        $proveedor->proveedor = $request->almproveedor;
        $proveedor->save();

        Alert::message('Proveedor agergado exitósamente', 'success');

        return redirect()->route('almacen.getProveedores');
    }
}
