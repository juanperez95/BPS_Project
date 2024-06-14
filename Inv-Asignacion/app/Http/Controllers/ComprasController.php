<?php

namespace App\Http\Controllers;

use App\Models\Compras; // Importa el modelo correcto
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index()
    {
        $compras = Compras::all();
        return view('compras.index', compact('compras'));
    }

    public function create()
    {
        return view('compras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            
        ]);

        Compras::create($request->all());

        return redirect()->route('compras.index')
                         ->with('success', 'Compra creada exitosamente.');
    }

    public function show(Compras $compras)
    {
        return view('compras.show', compact('compras'));
    }

    public function edit(Compras $compras)
    {
        return view('compras.edit', compact('compras'));
    }

    public function update(Request $request, Compras $compras)
    {
        
        
        

        $compras->update($request->all());

        return redirect()->route('compras.index')
                         ->with('success', 'Compra actualizada exitosamente.');
    }

    public function destroy(Compras $compras)
    {
        $compras->delete();

        return redirect()->route('compras.index')
                         ->with('success', 'Compra eliminada exitosamente.');
    }
}
