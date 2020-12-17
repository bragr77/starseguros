<?php

namespace App\Http\Controllers;

use App\Formulario;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class EditconyugueController extends Controller
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
        $formulario = Formulario::find($id);

        return view('backend.formularios.editar.editarconyugue', [
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

        $form = $formulario->id;

        if ($request->input('estadocivil') == "soltero")
        {
            $formulario->estadocivil    = $request->input('estadocivil');
            $formulario->nombrecy       = $request->input('2nombrecy');
            $formulario->nombrecy2      = $request->input('2nombrecy2');
            $formulario->apellidocy     = $request->input('2apellidocy');
            $formulario->apellidocy2    = $request->input('2apellidocy2');
            $formulario->generocy       = $request->input('2generocy');
            $formulario->fechancy       = $request->input('2fechancy');
            $formulario->estatuscy      = $request->input('2estatuscy');
            $formulario->ssncy          = $request->input('2ssncy');

            $formulario->save();

        } else
        {
            $formulario->estadocivil    = $request->input('estadocivil');
            $formulario->nombrecy       = $request->input('nombrecy');
            $formulario->nombrecy2      = $request->input('nombrecy2');
            $formulario->apellidocy     = $request->input('apellidocy');
            $formulario->apellidocy2    = $request->input('apellidocy2');
            $formulario->generocy       = $request->input('generocy');
            $formulario->fechancy       = $request->input('fechancy');
            $formulario->estatuscy      = $request->input('estatuscy');
            $formulario->ssncy          = $request->input('ssncy');

            $formulario->save();
        }

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
