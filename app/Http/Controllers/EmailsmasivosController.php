<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Mail\EmailsMasivos;
use App\Mensajemasivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsmasivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cont = 1;

        $mensajemasivos = Mensajemasivo::all();


        return view('backend.emailmasivos.index', [
            'mensajemasivos' => $mensajemasivos,
            'cont' => $cont,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.emailmasivos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $mensajemasivo = new Mensajemasivo();

        $mensajemasivo->asunto  = $request->input('asunto');
        $mensajemasivo->mensaje = $request->input('mensaje');

        $mensajemasivo->save();

        $clientes = Cliente::all();

        foreach ($clientes as $cliente) {
            $datosemail = [
                'asunto' => $request->input('asunto'),
                'mensaje' => $request->input('mensaje'),
                'nombre' => $cliente->nombre,
            ];

            Mail::to($cliente->email)->send(new EmailsMasivos($datosemail));
        }

        return view('backend.emailmasivos.menviado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
