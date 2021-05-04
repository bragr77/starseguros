<?php

namespace App\Http\Controllers;

use App\Formulario;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class ReporteclienteController extends Controller
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
}
