<?php

namespace App\Http\Controllers;

use App\Dependiente;
use App\Formulario;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class ReportecydController extends Controller
{
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
