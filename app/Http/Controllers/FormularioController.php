<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Dependiente;
use App\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cont = 1;

        $formularios = Formulario::all();

        return view('backend.formularios.index',[
            'formularios' => $formularios,
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
        return view('backend.formularios.create');
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

        return redirect()->route('formularios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cont = 1;

        $formulario = Formulario::find($id);

        $formulario->visto = 1;

        $formulario->save();

        $dependientes = $formulario->dependientes()->get();

        return view('backend.formularios.show', [
            'formulario' => $formulario,
            'dependientes' => $dependientes,
            'cont' => $cont,
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

        return view('backend.formularios.edit', [
            'formulario' => $formulario,
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
        $formulario = Formulario::find($id);

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

        $formulario->nombred1 = $request->input('nombred1');
        $formulario->generod1 = $request->input('generod1');
        $formulario->fechand1 = $request->input('fechand1');
        $formulario->relaciond1 = $request->input('relaciond1');
        $formulario->estatusd1 = $request->input('estatusd1');
        $formulario->ssnd1 = $request->input('ssnd1');

        $formulario->nombred2 = $request->input('nombred2');
        $formulario->generod2 = $request->input('generod2');
        $formulario->fechand2 = $request->input('fechand2');
        $formulario->relaciond2 = $request->input('relaciond2');
        $formulario->estatusd2 = $request->input('estatusd2');
        $formulario->ssnd2 = $request->input('ssnd2');

        $formulario->nombred3 = $request->input('nombred3');
        $formulario->generod3 = $request->input('generod3');
        $formulario->fechand3 = $request->input('fechand3');
        $formulario->relaciond3 = $request->input('relaciond3');
        $formulario->estatusd3 = $request->input('estatusd3');
        $formulario->ssnd3 = $request->input('ssnd3');

        $formulario->nombred4 = $request->input('nombred4');
        $formulario->generod4 = $request->input('generod4');
        $formulario->fechand4 = $request->input('fechand4');
        $formulario->relaciond4 = $request->input('relaciond4');
        $formulario->estatusd4 = $request->input('estatusd4');
        $formulario->ssnd4 = $request->input('ssnd4');

        $formulario->nombred5 = $request->input('nombred5');
        $formulario->generod5 = $request->input('generod5');
        $formulario->fechand5 = $request->input('fechand5');
        $formulario->relaciond5 = $request->input('relaciond5');
        $formulario->estatusd5 = $request->input('estatusd5');
        $formulario->ssnd5 = $request->input('ssnd5');

        $formulario->nombred6 = $request->input('nombred6');
        $formulario->generod6 = $request->input('generod6');
        $formulario->fechand6 = $request->input('fechand6');
        $formulario->relaciond6 = $request->input('relaciond6');
        $formulario->estatusd6 = $request->input('estatusd6');
        $formulario->ssnd6 = $request->input('ssnd6');

        $formulario->nombred7 = $request->input('nombred7');
        $formulario->generod7 = $request->input('generod7');
        $formulario->fechand7 = $request->input('fechand7');
        $formulario->relaciond7 = $request->input('relaciond7');
        $formulario->estatusd7 = $request->input('estatusd7');
        $formulario->ssnd7 = $request->input('ssnd7');

        $formulario->save();

        return redirect()->route('formularios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formulario = Formulario::find($id);

        $formulario->delete();

        return redirect()->route('formularios.index');
    }

}
