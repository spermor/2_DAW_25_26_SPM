<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;


class BlogController extends Controller
{

    public function portada()
    {
        return view('portada');
    }

    public function verNoticia()
    {
        return view('noticia');

    }

    public function nuevaNoticia()
    {
        return view('nuevaNoticia');
    }

    public function procesarFormularioNoticia(Request $r)
    {

        $r->validate([
            'titular' => 'required|string',
            'entradilla' => 'required|string',
            'cuerpo' => 'required|string'
        ]);

        $datos = $r->all();

        $datos['fecha'] = now()->format('Y-m-d');


        $noticia = Noticia::create($datos);

        return view('noticiaCreada', ["noticia" => $noticia]);

    }


}
