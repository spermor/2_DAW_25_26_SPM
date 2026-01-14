<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function crearArticulo()
    {

        $art = new Article();
        $art->title = 'Los Marcheneros invaden Nueva York';
        $art->content = 'Bla, bla, bla';
        $art->publish_date = '2025-01-10';
        $art->category = 'Drama';
        $art->views = 333;
        $art->save();
    }



    public function showFormArticulo(Request $r)
    {

        $r->validate([
            // validar
        ]);

        $article = Article::create($r->all());

        return view("articuloCreado", ["article" => $article]);

    }



    public function listarArticulos()
    {
        // listar todos los articulos
        // $list = Article::all();

        //listar articulos con mas de 300 visitas
        $list = Article::where('views', '>', 300)->get();
        
        return view("listadoArticulos", ["list" => $list]);

    }
}

