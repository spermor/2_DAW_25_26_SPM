<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showForm()
    {
        return view('user_form');
    }

    public function storeName(Request $r)
    {
        $name = $r->input('name');

        return "El nombre recibido es: " . $name;
    }
}
