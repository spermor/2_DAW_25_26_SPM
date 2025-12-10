<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function mostrarArray(){
        $items = ['Manzanas', 'Plátanos', 'Peras', 'Naranjas'];

        return view("refuerzo2Vista", ["items"=>$items]);
    }
public function mostrarValorArray($id){
        $items = ['Manzanas', 'Plátanos', 'Peras', 'Naranjas'];
        $error ="";
        if($id>3){
            return "Elemento no encontrado";
            
        }
        return view("refuerzo3Vista", ["items"=>$items, "id"=>$id ]);

    }

}
