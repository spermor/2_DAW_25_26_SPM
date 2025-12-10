<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Refuerzo1Controller extends Controller
{
    public function calcular($num1, $num2, $operation)
    {
        $resultado = 0;
        if ($operation == "suma") {
            $resultado = $num1 + $num2;
        } else if ($operation == "resta") {
            $resultado = $num1 - $num2;
        }else if ($operation == "division") {
            $resultado = $num1 / $num2;
        }else if ($operation == "multiplicacion") {
            $resultado = $num1 * $num2;
        }
        return view("refuerzo1Vista", ["num1"=> $num1, "num2"=> $num2, "operation"=>$operation, "resultado"=>$resultado]);
    }
}
