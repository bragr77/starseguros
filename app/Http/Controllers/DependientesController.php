<?php

namespace App\Http\Controllers;

use App\Dependiente;
use App\Formulario;
use Illuminate\Http\Request;

class DependientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contd = 1;

        $dependientes = Dependiente::all();

        return view('backend.formularios.cliente.dependientes.index',[
            'dependientes' => $dependientes,
            'contd' => $contd,
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
        $dependiente = Dependiente::find($id);

        return view('backend.formularios.cliente.dependientes.show2', [
            'dependiente'  => $dependiente,
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
        $dependiente = Dependiente::find($id);

        return view('backend.formularios.cliente.dependientes.edit2', [
            'dependiente'   => $dependiente,
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
        $dependiente = Dependiente::find($id);

        $form = $dependiente->formulario_id;

        $dependiente->nombre    = $request->input('nombre');
        $dependiente->nombre2   = $request->input('nombre2');
        $dependiente->apellido  = $request->input('apellido');
        $dependiente->apellido2 = $request->input('apellido2');
        $dependiente->genero    = $request->input('genero');
        $dependiente->fechan    = $request->input('fechan');
        $dependiente->relacion  = $request->input('relacion');
        $dependiente->estatus   = $request->input('estatus');
        $dependiente->ssn       = $request->input('ssn');

        $dependiente->save();

        return redirect()->route('dependientes.index');
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
