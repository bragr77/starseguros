<?php

namespace App\Http\Controllers;

use App\Dependiente;
use App\Formulario;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function reportclientes()
    {
        $contr1 = 1;

        $formularios = Formulario::orderBy('created_at', 'desc')->get();

        $pdf = PDF::loadView('backend.pdfs.reportclientes' , [
            'formularios'    => $formularios,
            'contr1'        => $contr1,
        ]);

        return $pdf->stream('reporteclientes.pdf');
    }

    public function reportclientesydependientes()
    {
        $contr2 = 1;

        $formularios = Formulario::all();

        return view('backend.reportes.clientescondependientes.index',[
            'formularios' => $formularios,
            'contr2' => $contr2,
        ]);


       /*  $contr2 = 1;

        $formularios = Formulario::orderBy('created_at', 'desc')->get();

        $dependientes = Dependiente::all();

        $pdf = PDF::loadView('backend.pdfs.reportclientesydependientes' , [
            'formularios'   => $formularios,
            'dependientes'  =>$dependientes,
            'contr2'        => $contr2,
        ]);

        return $pdf->stream('reporteclientesydependientes.pdf'); */
    }

    public function showclientesydependientes($id)
    {
        $formulario = Formulario::find($id);

        $dependientes = $formulario->dependientes()->get();

        $pdf = PDF::loadView('backend.pdfs.reportclientesydependientes' , [
            'formulario'   => $formulario,
            'dependientes'  =>$dependientes,
        ]);

        return $pdf->stream('reporteclientesydependientes.pdf');
    }

}
