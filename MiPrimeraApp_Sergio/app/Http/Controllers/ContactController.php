<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contacto');
    }

    public function storeForm(Request $r)
    {
        $validated = $r->validate([
            'nombre'  => 'required|string|max:30',
            'correo'  => 'required|email',
            'mensaje' => 'required|string|max:500',
        ]);

        return view('gracias', ['datos' => $validated]);
    }
}