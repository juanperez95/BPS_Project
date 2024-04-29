<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class Productos extends Controller
{
    public function index()
    {
        $Producto = Producto::all();
        return view('producto.index')->with('Producto', $Producto);
    }

    public function create()
    {
        //
        return view('producto.create');
    }

    public function store(Request $request)
    {
        //
        $Producto = new Producto();
        $Producto->id_producto = $request->input('id_producto');
        $Producto->categoria_id = $request->input('id_producto');
        $Producto->descripcion_producto = $request->input('id_producto');
        $Producto->stock_producto = $request->input('id_producto');
        $Producto->entrega_producto = $request->input('id_producto');


        $Producto->save();

        return redirect()->route('producto.listar')->with('Hecho', 'Producto creado exitosamente');
    }

    public function show (Producto $Producto)
    {
        //
    }

    public function edit(Producto $Producto, Request $request)
    {
        //
        $idProducto = $request->input('id_producto');
        $Producto = Producto::find($idProducto);
        return view('producto.edit',['Producto' => $Producto]);
    }

    public function vistaedit(Request $request)
    {
        $idProducto = $request->input('id_producto');
        $Producto = Producto::find($idProducto);
        return view('producto.edit',['Producto' => $Producto]);
    }

    public function update(Request $request)
    {
        //

        $validatedata = $request->validate( [
            'id_producto' => 'required',
            'categoria_id' => 'required',
            'descripcion_producto' => 'required',
            'stock_producto' => 'required',
            'entrega_producto' => 'required',
        ]);

        $Producto = new Producto();
        $Producto->id_producto = $request->input('id_producto');
        $Producto->categoria_id = $request->input('id_producto');
        $Producto->descripcion_producto = $request->input('id_producto');
        $Producto->stock_producto = $request->input('id_producto');
        $Producto->entrega_producto = $request->input('id_producto');


        $Producto = Producto::find($request->input('id_producto'));

        $Producto->update();

        return redirect()->route('producto.listar')->with('Hecho', 'Producto editado exitosamente');
    }

    public function destroy(Request $request)
    {
        //
        $idProducto = $request->input('id_producto');
        $Producto = Producto::find($idProducto);

        if($Producto){
            $Producto->delete();
            return redirect()-back()->with('Hecho', 'Producto eliminado exitosamente');
        }

        return redirect()->back()->with('Error', 'No se encontro el Producto');

    }
}
