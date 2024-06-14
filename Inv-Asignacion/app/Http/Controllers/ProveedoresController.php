<?php

namespace App\Http\Controllers;

use App\Models\Proveedores; // Importa el modelo correcto
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index()
    {
        $proveedores = Proveedores::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function create()
    {
        return view('proveedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            
        ]);

        Proveedores::create($request->all());

        return redirect()->route('proveedores.index')
                         ->with('success', 'Proveedor creado exitosamente.');
    }

    public function show(Proveedores $proveedores)
    {
        return view('proveedores.show', compact('proveedores'));
    }

    public function edit(Proveedores $proveedores)
    {
        return view('proveedores.edit', compact('proveedores'));
    }

    public function update(Request $request, Proveedores $proveedores)
    {
        
        
        

        $proveedores->update($request->all());

        return redirect()->route('proveedores.index')
                         ->with('success', 'Proveedor actualizado exitosamente.');
    }

    public function destroy(Proveedores $proveedores)
    {
        $proveedores->delete();

        return redirect()->route('proveedores.index')
                         ->with('success', 'Proveedor eliminado exitosamente.');
    }
}
