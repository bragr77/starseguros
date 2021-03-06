<?php

namespace App\Http\Controllers;

use App\Contacto;
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

        if ($request->hasFile('img_path')) {
            $file = $request->file('img_path');
            $name = $request->input('imagen') . ".jpg";
            $file->move(public_path() . '/imgmensajes', $name);

            $mensajemasivo->imagen = $name;
        }


        $mensajemasivo->save();

        $contactos = Contacto::all();

        foreach ($contactos as $contacto) {
            $datosemail = [
                'asunto' => $request->input('asunto'),
                'mensaje' => $request->input('mensaje'),
                'imagen' => $name,
                'nombre' => $contacto->nombre,
            ];

            Mail::to($contacto->email)->send(new EmailsMasivos($datosemail));
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

        $mensajemasivo = Mensajemasivo::find($id);

        return view('backend.emailmasivos.show', [
            'mensajemasivo' => $mensajemasivo,
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
        $mensajemasivo = Mensajemasivo::find($id);

        $filepath = public_path() . '/imgmensajes/'. $mensajemasivo->imagen;
        \File::delete($filepath);

        $mensajemasivo->delete();

        return redirect()->route('emails.index');
    }
}
