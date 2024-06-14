<?php

namespace App\Http\Controllers;

use App\Models\Productos; // Importa el modelo correcto
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Productos::all(); // Obtiene todas las asignaciones de la base de datos
        return view('productos.index', compact('productos')); // Pasa las asignaciones a la vista
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            
        ]);

        Productos::create($request->all());

        return redirect()->route('productos.index')
                         ->with('success', 'Producto creado exitosamente.');
    }

    public function show(Productos $productos)
    {
        return view('productos.show', compact('productos'));
    }

    public function edit(Productos $productos)
    {
        return view('productos.edit', compact('productos'));
    }

    public function update(Request $request, Productos $productos)
    {
        
        $productos = new Productos();
        
        
        

        $productos->update($request->all());

        return redirect()->route('productos.index')
                         ->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Productos $productos)
    {
        $productos->delete();

        return redirect()->route('productos.index')
                         ->with('success', 'Producto eliminado exitosamente.');
    }
}
