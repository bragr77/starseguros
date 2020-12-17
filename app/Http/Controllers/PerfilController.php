<?php

namespace App\Http\Controllers;

use App\Formulario;
use App\Profile;
use App\Seguro;
use Illuminate\Http\Request;

class PerfilController extends Controller
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

        $formulario->perfil = 1;

        $formulario->save();

        $profile = new Profile([
            'tiposeguro' => $request->input('seguro'),
            'comision' => $request->input('comision'),
            'observaciones' => $request->input('observaciones'),
        ]);

        $formulario->profile()->save($profile);

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
        $profile = Profile::find($id);
        $seguros = Seguro::all();

        return view('backend.formularios.cliente.perfil.edit', [
            'profile'   => $profile,
            'seguros'   => $seguros,
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
        $profile = Profile::find($id);

        $form = $profile->formulario_id;

        $profile->tiposeguro    = $request->input('seguro');
        $profile->comision      = $request->input('comision');
        $profile->observaciones = $request->input('observaciones');

        $profile->save();

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
        //
    }
}
