<?php

namespace App\Http\Controllers;

use App\Dependiente;
use App\Formulario;
use Illuminate\Http\Request;

class DependienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $formulario = Formulario::find($request->input('id'));

        $formulario->dependientes = "si";

        $formulario->save();

        $dependiente = new Dependiente([
            'nombre'    => $request->input('nombre'),
            'nombre2'   => $request->input('nombre2'),
            'apellido'  => $request->input('apellido'),
            'apellido2' => $request->input('apellido2'),
            'genero'    => $request->input('genero'),
            'fechan'    => $request->input('fechan'),
            'relacion'  => $request->input('relacion'),
            'estatus'   => $request->input('estatus'),
            'ssn'       => $request->input('ssn'),
        ]);

        $formulario->dependientes()->save($dependiente);

        return redirect()->back();
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

        return view('backend.formularios.cliente.dependientes.show', [
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

        return view('backend.formularios.cliente.dependientes.edit', [
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

        return redirect('/panel/formularios/'. $form);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dependiente = Dependiente::find($id);

        $formulario = Formulario::find($dependiente->formulario_id);

        $items = $formulario->dependientes()->get();

        $contar = 0;

        foreach ($items as $item) {
            $contar ++;
        }

        $dependiente->delete();

        $restar = $contar - 1;

        if ($restar == 0) {
            $formulario->dependientes = "no";
            $formulario->save();
        }

        return redirect()->back();
    }
}
