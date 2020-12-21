<?php

namespace App\Http\Controllers;

use App\Seguro;
use Illuminate\Http\Request;

class SeguroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conts = 1;

        $seguros = Seguro::all();

        return view('backend.seguros.index',[
            'seguros' => $seguros,
            'conts' => $conts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.seguros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seguro = new Seguro();

        $seguro->nombre = $request->input('nombre');

        $seguro->save();

        return redirect()->route('seguros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seguro = Seguro::find($id);

        return view('backend.seguros.show', [
            'seguro' => $seguro,
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
        $seguro = Seguro::find($id);

        return view('backend.seguros.edit', [
            'seguro' => $seguro,
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
        $seguro = Seguro::find($id);;

        $seguro->nombre = $request->input('nombre');

        $seguro->save();

        return redirect()->route('seguros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seguro = Seguro::find($id);

        $seguro->delete();

        return redirect()->route('seguros.index');
    }
}
