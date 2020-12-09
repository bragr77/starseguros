<?php

namespace App\Http\Controllers;

use App\Formulario;
use Illuminate\Http\Request;

class PlanillaController extends Controller
{
    public function planilla($id)
    {
        $formulario = Formulario::find($id);

        $formulario->visto = 1;

        $formulario->save();

        $dependientes = $formulario->dependientes()->get();

        return view('backend.formularios.planilla', [
            'formulario' => $formulario,
            'dependientes' => $dependientes,
        ]);
    }
}
