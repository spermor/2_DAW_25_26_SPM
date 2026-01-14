<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductoController extends Controller
{
    public function showFormProducto()
    {
        return view('formProducto');
    }

    public function procesarFormProducto(Request $r)
    {

        $r->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'precio' => 'required',
            'stock' => 'required|integer'
        ]);

        $producto = new Producto();
        $producto->nombre = $r->get("nombre");
        $producto->descripcion = $r->get("descripcion");
        $producto->precio = $r->get("precio");
        $producto->stock = $r->get("stock");

        $producto->save();

        return view('productoCreado', ["producto" => $producto]);
    }

    public function mostrarProductos()
    {
        // listar todos los articulos
        $list = Producto::all();
        return view("listadoProductos", ["list" => $list]);

    }



}
