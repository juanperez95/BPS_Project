<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $producto = Producto::all();
        return view('producto.index', compact('producto'));
    }

    public function create()
    {
        return view('producto.create');
    }

    public function store(Request $request)
    {
        Producto::create($request->all());

        return redirect()->route('producto.index')
                         ->with('success', 'Producto creado exitosamente.');
    }

    public function show(Producto $producto)
    {
        return view('producto.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        return view('producto.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'producto' => 'required',
            'espacio_1' => 'required',
            'espacio_2' => 'required',
            'espacio_3' => 'required',
            'espacio_4' => 'required',
            'espacio_5' => 'required',
            'espacio_6' => 'required',
            'espacio_7' => 'required',
        ]);

        $producto->update($request->all());

        return redirect()->route('producto.index')
                         ->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('producto.index')
                         ->with('success', 'Producto eliminado exitosamente.');
    }
}
