<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SorteoController extends Controller
{
    public function numero($numero = null)
    {
        if ($numero == null) {
            return redirect()->route('actividad5.3', ['numero' => 50]);
        }

        $random = random_int(0, $numero);

        return view("sorteoNumero", ["random" => $random]);



    }
}
