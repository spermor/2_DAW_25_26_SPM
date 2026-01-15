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

        // Creacion de producto automatica (en el modelo Producto hay que incluior el $fillable)
        $producto = Producto::create($r->all());

        // Creacion de producto manual
        // $producto = new Producto();
        // $producto->nombre = $r->get("nombre");
        // $producto->descripcion = $r->get("descripcion");
        // $producto->precio = $r->get("precio");
        // $producto->stock = $r->get("stock");

        // $producto->save();

        return view('productoCreado', ["producto" => $producto]);
    }

    public function mostrarProductos()
    {
        // listar todos los articulos
        $list = Producto::all();
        return view("listadoProductos", ["list" => $list]);

    }

    public function borrarProducto($id)
    {
        //busco el producto en la bbdd
        $producto = Producto::find($id);
        //lo borro de la bbdd
        $producto->delete();

        //redirijo a la ruta (por el nombre de la ruta en web.php)
        return redirect()->route("mostrarProductos");
    }

    public function actualizarProducto($id)
    {
        $producto = Producto::find($id);

        return view("formActualizarProducto", ["producto" => $producto]);
    }

public function procesarActualizarProducto($id, Request $r){
    //busco el producto en la bbdd
        $producto = Producto::find($id);
        // actualizo con todos los campos que me vengan del formulario por $r
        $producto->update($r->all());
        // redirijo a la tabla de nuevo con los datos actualizados
        return redirect()->route("mostrarProductos");
}


}
