<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraIMCController extends Controller
{
    public function calcularImc($peso, $altura){
        $imc = $peso / ($altura*$altura);

        return view("calcularImc", ["peso"=>$peso, "altura"=>$altura, "imc"=>$imc]);
    }
}
