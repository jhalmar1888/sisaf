<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->modulo->modulo  == 'Tesoreria') {
            return view('home.hometesoreria');
        }

        if (Auth::user()->modulo->modulo  == 'Administrador') {
            return view('home.homeadministrador');
        }

        if (Auth::user()->modulo->modulo  == 'Contabilidad') {
            return view('home.homecontabilidad');
        }

        if (Auth::user()->modulo->modulo  == 'RR.HH.') {
            return view('home.homerrhh');
        }

        if (Auth::user()->modulo->modulo  == 'Almacen') {
            return view('home.homealmacen');
        }

        if (Auth::user()->modulo->modulo  == 'Presupuestos') {
            return view('home.homepresupuestos');
        }
        if (Auth::user()->modulo->modulo  == 'Cobranza') {
            return view('home.homecobranza');
        }
    }
}
