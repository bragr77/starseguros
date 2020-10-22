<?php

namespace App\Http\Controllers;

use App\Cliente;
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
        $clientes = Cliente::all();

        foreach ($clientes as $cliente) {
            $contador++;
        }

        return view('backend.home', [
            'clientes'  => $clientes,
            'cont'      => $cont,
            'contador'  => $contador,

        ]);


        $cont = 1;

        $mensajes = Mensaje::all();;

        return view('backend.mensajes.index', [
            'mensajes' => $mensajes,
            'cont' => $cont,
        ]);
    }
}
