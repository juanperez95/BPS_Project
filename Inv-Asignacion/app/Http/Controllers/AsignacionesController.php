<?php

namespace App\Http\Controllers;

use App\Models\Asignaciones; // Importa el modelo correcto
use Illuminate\Http\Request;

class AsignacionesController extends Controller
{
    public function index()
    {
        $asignaciones = Asignaciones::all(); // Obtiene todas las asignaciones de la base de datos
        return view('asignaciones.index', compact('asignaciones')); // Pasa las asignaciones a la vista
    }

    public function create()
    {
        return view('asignaciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            
        ]);

        Asignaciones::create($request->all());

        return redirect()->route('asignaciones.index')
                         ->with('success', 'Asignación creada exitosamente.');
    }

    public function show(Asignaciones $asignaciones)
    {
        return view('asignaciones.show', compact('asignaciones'));
    }

    public function edit(Asignaciones $asignaciones)
    {
        return view('asignaciones.edit', compact('asignaciones'));
    }

    public function update(Request $request, Asignaciones $asignaciones)
    {
        
        $asignacion = new Asignaciones();
        $asignacion->fechaAsignacion = $request->input('fecha_asignacion');
        $asignacion->solicitante = $request->input('solicitante');
        $asignacion->operacion = $request->input('operacion');
        $asignacion->cantidad = $request->input('cantidad');
        $asignacion->numeroCaso = $request->input('numero_caso');
        $asignacion->serialDiadema = $request->input('serial_diadema');
        

        $asignaciones->update($request->all());

        return redirect()->route('asignaciones.index')
                         ->with('success', 'Asignación actualizada exitosamente.');
    }

    public function destroy(Asignaciones $asignaciones)
    {
        $asignaciones->delete();

        return redirect()->route('asignaciones.index')
                         ->with('success', 'Asignación eliminada exitosamente.');
    }
}
