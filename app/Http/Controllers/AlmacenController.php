<?php

namespace App\Http\Controllers;

use App\Entities\ComprobanteIngreso;
use App\Entities\ComprobanteSalida;
use App\Entities\KardexCentral;
use App\Entities\KardexIngreso;
use App\Entities\KardexSalida;
use App\Entities\Material;
use App\Entities\Partida;
use App\Entities\Proveedor;
use App\Entities\TipoUnidad;
use App\Entities\Unidad;
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
        $articulo = Material::findOrFail($id_articulo);
        $partidas = Partida::pluck('partida', 'id');
        $tipo = TipoUnidad::pluck('tipo', 'id');

        return view('almacenes.articulos.modificararticulo', compact('articulo', 'partidas', 'tipo'));
    }

    public function postModificarArticulo(Request $request)
    {
        $this->validate($request, [
            'almcodigo' => 'required',
            'almid_partida' => 'required',
            'almdescripcion'    => 'required',
            'almtipounidad'     => 'required',
            'almpusf'           => 'required',
            'almpucf'           => 'required'
        ]);

        $material = Material::findOrFail($request->antiguo_id);
        $material->codigo = $request->almcodigo;
        $material->id_partida = $request->almid_partida;
        $material->descripcion = $request->almdescripcion;
        $material->id_tipounidad = $request->almtipounidad;
        $material->pusf = $request->almpusf;
        $material->pucf = $request->almpucf;
        $material->save();

        Alert::message('Articulo modificado exitósamnte', 'success');

        return redirect()->route('almacen.getArticulos');
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




    public function getComprobantesSalida()
    {
        $compsalidas = ComprobanteSalida::paginate(50);

        return view('almacenes.movimientos.comprobantessalida', compact('compsalidas'));
    }

    public function getAgregarComprobanteSalida()
    {
        $unidades = Unidad::pluck('unidad', 'id');

        return view('almacenes.movimientos.agregarcomprobantesalida', compact('unidades'));
    }

    public function postAgregarComprobanteSalida(Request $request)
    {
        $this->validate($request, [
            'almproyecto'   => 'required',
            'almid_unidad'  => 'required',
            'almmotivo'     => 'required',
            'almfsalida'    => 'required'
        ]);

        $compsalida = new ComprobanteSalida;
        $compsalida->proyecto = $request->almproyecto;
        $compsalida->id_unidad = $request->almid_unidad;
        $compsalida->motivo = $request->almmotivo;
        $compsalida->fecha = $request->almfsalida;
        $compsalida->save();

        Alert::message('Comprobante agergado exitósamnte', 'success');

        return redirect()->route('almacen.getComprobantesSalida');
    }

    public function getComprobanteSalidaKardex($id_compsalida)
    {
        $comprobante = ComprobanteSalida::findOrFail($id_compsalida);
        $articulos = KardexSalida::where('id_compsalidas', $id_compsalida)
            ->get();

        return view('almacenes.movimientos.comprobantessalidakardex', compact('comprobante', 'articulos'));
    }

    public function getAgregarArticuloCS($id_compsalida)
    {
        $comprobante = ComprobanteSalida::findOrFail($id_compsalida);
        $articulos = Material::pluck('descripcion', 'id');

        return view('almacenes.movimientos.agregararticulocomprobantesalida', compact('comprobante', 'articulos'));
    }

    public function postAgregarArticuloCS(Request $request)
    {
        $artbuscado = KardexCentral::where('id_material', $request->almid_articulo)->first();
        if ($artbuscado) $maximo = $artbuscado->cantidad;
        else $maximo = 0;
        $this->validate($request, [
            'id_compsalida'     => 'required',
            'almid_articulo'    => 'required|exists:kardexcentral,id_material',
            'almcantidad'       => 'required|numeric|min:1|max:' . $maximo
        ]);

        $articulo = KardexCentral::where('id_material', $request->almid_articulo)->first();
        $articulo->cantidad = $articulo->cantidad - $request->almcantidad;
        $articulo->save();

        $art = Material::findOrFail($request->almid_articulo);
        $comprobante = new KardexSalida;
        $comprobante->id_compsalidas = $request->id_compsalida;
        $comprobante->id_material = $request->almid_articulo;
        $comprobante->cantidades = $request->almcantidad;
        $comprobante->ptotal = $art->pusf * $request->almcantidad;
        $comprobante->save();

        Alert::message('Articulo agregado exitósamnte', 'success');

        return redirect()->route('almacen.getComprobanteSalidaKardex', $request->id_compsalida);
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
            'almproveedor'  => 'required',
            'almdireccion'  => 'required',
            'almtelefono'   => 'required|numeric|min:0|max:99999999',
            'almempresa'    => 'required',
            'almnit'        => 'required|numeric|min:0|max:99999999',
            'almemail'      => 'required',
            'almdescripcion'=> 'required'
        ]);

        $proveedor = new Proveedor;
        $proveedor->proveedor   = $request->almproveedor;
        $proveedor->direccion   = $request->almdireccion;
        $proveedor->telefono    = $request->almtelefono;
        $proveedor->empresa     = $request->almempresa;
        $proveedor->nit         = $request->almnit;
        $proveedor->email       = $request->almemail;
        $proveedor->descripcion = $request->almdescripcion;

        $proveedor->save();

        Alert::message('Proveedor agergado exitósamente', 'success');

        return redirect()->route('almacen.getProveedores');
    }
}
