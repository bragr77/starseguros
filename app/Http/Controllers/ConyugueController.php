<?php

namespace App\Http\Controllers;

use App\Formulario;
use Illuminate\Http\Request;

class ConyugueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contc = 1;

        $formularios = Formulario::all();

        return view('backend.formularios.cliente.conyugues.index',[
            'formularios' => $formularios,
            'cont' => $contc,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formulario = Formulario::find($id);

        return view('backend.formularios.cliente.conyugues.show', [
            'formulario'  => $formulario,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formulario = Formulario::find($id);

        return view('backend.formularios.cliente.conyugues.edit', [
            'formulario'   => $formulario,
        ]);
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
        $formulario = formulario::find($id);

        $formulario->nombrecy       = $request->input('nombrecy');
        $formulario->nombrecy2      = $request->input('nombrecy2');
        $formulario->apellidocy     = $request->input('apellidocy');
        $formulario->apellidocy2    = $request->input('apellidocy2');
        $formulario->generocy       = $request->input('generocy');
        $formulario->fechancy       = $request->input('fechancy');
        $formulario->estatuscy      = $request->input('estatuscy');
        $formulario->ssncy          = $request->input('ssncy');

        $formulario->save();

        return redirect()->route('conyugues.index');
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
