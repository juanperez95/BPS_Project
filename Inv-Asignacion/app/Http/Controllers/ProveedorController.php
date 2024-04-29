<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;


class ProveedorController extends Controller
{
    //
    public function index()
    {
        $proveedor = Proveedor::all();
        return view('proveedor.index')->with('proveedor', $proveedor);
    }

    public function create()
    {
        //
        return view('proveedor.create');
    }

    public function store(Request $request)
    {
        //
        $proveedor = new Proveedor();
        $proveedor->nombre = $request->input('nombre');
        $proveedor->nit = $request->input('nit');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->email = $request->input('email');
        $proveedor->estado = $request->input('estado');


        $proveedor->save();

        return redirect()->route('proveedor.listar')->with('Hecho', 'Proveedor creado exitosamente');
    }

    public function show (Proveedor $proveedor)
    {
        //
    }

    public function edit(Proveedor $proveedor, Request $request)
    {
        //
        $idproveedor = $request->input('idproveedor');
        $proveedor = Proveedor::find($idproveedor);
        return view('proveedor.edit',['proveedor' => $proveedor]);
    }

    public function vistaedit(Request $request)
    {
        $idproveedor = $request->input('idproveedor');
        $proveedor = Proveedor::find($idproveedor);
        return view('proveedor.edit',['proveedor' => $proveedor]);
    }

    public function update(Request $request)
    {
        //

        $validatedata = $request->validate( [
            'nombre' => 'required',
            'nit' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'estado' => 'required',
        ]);

        $proveedor = Proveedor::find($request->input('idproveedor'));
        $proveedor->nombre = $request->input('nombre');
        $proveedor->nit = $request->input('nit');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->email = $request->input('email');
        $proveedor->estado = $request->input('estado');
        $proveedor->update();

        return redirect()->route('proveedor.listar')->with('Hecho', 'Proveedor editado exitosamente');
    }

    public function destroy(Request $request)
    {
        //
        $idproveedor = $request->input('idproveedor');
        $proveedor = Proveedor::find($idproveedor);

        if($proveedor){
            $proveedor->delete();
            return redirect()-back()->with('Hecho', 'Proveedor eliminado exitosamente');
        }

        return redirect()->back()->with('Error', 'No se encontro el proveedor');

    }

}

