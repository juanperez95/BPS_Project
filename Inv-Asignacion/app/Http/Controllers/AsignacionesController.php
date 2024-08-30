<?php

namespace App\Http\Controllers;

use App\Models\Asignaciones; // Importa el modelo correcto
use Illuminate\Http\Request;

class AsignacionesController extends Controller
{
    public function index()
    {
        $asignaciones = Asignaciones::all(); // Obtiene todas las asignaciones de la base de datos
        return view('asignaci nes.index', compact('asignaciones')); // Pasa las asignaciones a la vista
    }

    public function create()
    {
        return view('asignaciones.create');
    }

    public function store(Request $request)
    {
        $asignaciones = new Asignaciones();
        $asignaciones->fecha_asignacion = $request->input('fecha_asignacion');
        $asignaciones->solicitante_asignacion = $request->input('solicitante_asignacion');
        $asignaciones->operacion_asignacion = $request->input('operacion_asignacion');
        $asignaciones->id_asignacion = $request->input('id_asignacion'); 
        $asignaciones->serial_diadema_asignacion = $request->input('serial_diadema_asignacion');
        $asignaciones->producto_id = $request->input('producto_id');
        $asignaciones->cantidad_asignacion = $request->input('cantidad_asignacion');
        $asignaciones->caso_asignacion = $request->input('caso_asignacion');

        $asignaciones->save();

        return redirect()->route('asignaciones.index');

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
