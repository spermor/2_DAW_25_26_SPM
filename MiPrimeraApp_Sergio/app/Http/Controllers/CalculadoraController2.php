<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController2 extends Controller
{
    public function showForm()
    {
        return view('refuerzo10');
    }

    public function showResult(Request $r)
    {

        $validated = $r->validate([
            'n1' => 'required|integer',
            'n2' => 'required|integer',
        ]);


        $n1 = $r->get("n1");
        $n2 = $r->get("n2");
        $operacion = $r->get("operacion");


        if ($operacion == "suma") {
            $resultado = $n1 + $n2;
        } else if ($operacion == "resta") {
            $resultado = $n1 - $n2;
        } else if ($operacion == "multiplicacion") {
            $resultado = $n1 * $n2;
        } else if ($operacion == "division") {
            $resultado = $n1 / $n2;
        } else {
            $resultado = $n1 ^ $n2;
        }


        return view('refuerzo10', ["resultado" => $resultado]);
    }


}
