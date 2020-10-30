<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Formulario;
use App\Mensaje;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $cont = 1;
        $contador = 0;
        $mcontador = 0;
        $fcontador = 0;
        $clientes = Cliente::all();
        $mensajes = Mensaje::all();
        $formularios = Formulario::all();

        foreach ($mensajes as $mensaje) {
            if ($mensaje->visto == 0) {
                $mcontador++;
            }
        }

        foreach ($formularios as $formulario) {
            if ($formulario->visto == 0) {
                $fcontador++;
            }
        }

        foreach ($clientes as $cliente) {
            $contador++;
        }

        return view('backend.home', [
            'clientes'  => $clientes,
            'cont'      => $cont,
            'contador'  => $contador,
            'mcontador'  => $mcontador,
            'fcontador'  => $fcontador,
        ]);

    }
}
