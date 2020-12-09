<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Dependiente;
use App\Formulario;
use Illuminate\Http\Request;

class FormfrontendController extends Controller
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
        //salvar en base de datos
        $formulario = new Formulario();

        $formulario->nombre = $request->input('nombre');
        $formulario->genero = $request->input('genero');
        $formulario->fechan = $request->input('fechan');
        $formulario->direccion = $request->input('direccion');
        $formulario->ciudad = $request->input('ciudad');
        $formulario->postal = $request->input('postal');
        $formulario->telefono = $request->input('telefono');
        $formulario->email = $request->input('email');
        $formulario->estatus = $request->input('estatus');
        $formulario->ssn = $request->input('ssn');
        $formulario->estadocivil = $request->input('estadocivil');

        $formulario->nombrecy = $request->input('nombrecy');
        $formulario->generocy = $request->input('generocy');
        $formulario->fechancy = $request->input('fechancy');
        $formulario->estatuscy = $request->input('estatuscy');
        $formulario->ssncy = $request->input('ssncy');
        $formulario->ingreso = $request->input('ingreso');
        $formulario->banco = $request->input('banco');
        $formulario->ruta = $request->input('ruta');
        $formulario->cuenta = $request->input('cuenta');

        $formulario->dependientes = $request->input('agregardependientes');

        $formulario->visto = 0;

        $formulario->save();

        //salvar los datos de la tabla relacionada

        if ($request->input('nombred1') != null) {
            $d1 = new Dependiente([
                'nombre' => $request->input('nombred1'),
                'genero' => $request->input('generod1'),
                'fechan' => $request->input('fechand1'),
                'relacion' => $request->input('relaciond1'),
                'estatus' => $request->input('estatusd1'),
                'ssn' => $request->input('ssnd1'),
            ]);

            $formulario->dependientes()->save($d1);
        };

        if ($request->input('nombred2') != null) {
            $d2 = new Dependiente([
                'nombre' => $request->input('nombred2'),
                'genero' => $request->input('generod2'),
                'fechan' => $request->input('fechand2'),
                'relacion' => $request->input('relaciond2'),
                'estatus' => $request->input('estatusd2'),
                'ssn' => $request->input('ssnd2'),
            ]);

            $formulario->dependientes()->save($d2);
        };

        if ($request->input('nombred3') != null) {
            $d3 = new Dependiente([
                'nombre' => $request->input('nombred3'),
                'genero' => $request->input('generod3'),
                'fechan' => $request->input('fechand3'),
                'relacion' => $request->input('relaciond3'),
                'estatus' => $request->input('estatusd3'),
                'ssn' => $request->input('ssnd3'),
            ]);

            $formulario->dependientes()->save($d3);
        };

        if ($request->input('nombred4') != null) {
            $d4 = new Dependiente([
                'nombre' => $request->input('nombred4'),
                'genero' => $request->input('generod4'),
                'fechan' => $request->input('fechand4'),
                'relacion' => $request->input('relaciond4'),
                'estatus' => $request->input('estatusd4'),
                'ssn' => $request->input('ssnd4'),
            ]);

            $formulario->dependientes()->save($d4);
        };

        if ($request->input('nombred5') != null) {
            $d5 = new Dependiente([
                'nombre' => $request->input('nombred5'),
                'genero' => $request->input('generod5'),
                'fechan' => $request->input('fechand5'),
                'relacion' => $request->input('relaciond5'),
                'estatus' => $request->input('estatusd5'),
                'ssn' => $request->input('ssnd5'),
            ]);

            $formulario->dependientes()->save($d5);
        };

        if ($request->input('nombred6') != null) {
            $d6 = new Dependiente([
                'nombre' => $request->input('nombred6'),
                'genero' => $request->input('generod6'),
                'fechan' => $request->input('fechand6'),
                'relacion' => $request->input('relaciond6'),
                'estatus' => $request->input('estatusd6'),
                'ssn' => $request->input('ssnd6'),
            ]);

            $formulario->dependientes()->save($d6);
        };

        if ($request->input('nombred7') != null) {
            $d7 = new Dependiente([
                'nombre' => $request->input('nombred7'),
                'genero' => $request->input('generod7'),
                'fechan' => $request->input('fechand7'),
                'relacion' => $request->input('relaciond7'),
                'estatus' => $request->input('estatusd7'),
                'ssn' => $request->input('ssnd7'),
            ]);

            $formulario->dependientes()->save($d7);
        };

        $contacto = new Contacto();

        $contacto->nombre = $request->input('nombre');
        $contacto->email = $request->input('email');
        $contacto->telefono = $request->input('telefono');
        $contacto->cliente = "Si";

        $contacto->save();

        return view('frontend.forenviado');
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
