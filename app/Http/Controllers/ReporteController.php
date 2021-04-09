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

        $formularios = Formulario::orderBy('created_at', 'desc')->get();

        $dependientes = Dependiente::all();

        $pdf = PDF::loadView('backend.pdfs.reportclientesydependientes' , [
            'formularios'   => $formularios,
            'dependientes'  =>$dependientes,
            'contr2'        => $contr2,
        ]);

        return $pdf->stream('reporteclientesydependientes.pdf');
    }
}
