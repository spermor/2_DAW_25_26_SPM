<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function suma($n1 = null, $n2 = null)
    {

        if ($n1 == null) {
            $n1 = 2;
        }

        if ($n2 == null) {
            $n2 = 2;
        }
        $resultado = $n1 + $n2;

        return view("sumaCalculadora", ["n1" => $n1, "n2" => $n2, "resultado" => $resultado]);
    }

    public function formularioSumar()
    {
        return view("formularioSumar");
    }

    public function procesarFormularioSumar(Request $r)
    {
        $r->validate([
            'n1' => 'required|integer',
            'n2' => 'required|integer'
        ]);





        $n1 = $r->get("n1");
        $n2 = $r->get("n2");
        $resultado = $n1 + $n2;
        return view("resultadoSuma", ["resultado" => $resultado]);
    }

}
