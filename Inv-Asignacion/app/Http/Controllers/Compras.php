<?php

namespace App\Http\Controllers;
use App\Models\Compra;
use Illuminate\Http\Request;

class Compras extends Controller
{
    public function index()
    {
        $Compra = Compra::all();
        return view('compra.index')->with('Compra', $Compra);
    }

    public function create()
    {
        //
        return view('compra.create');
    }

    public function store(Request $request)
    {
        //
        $Compra = new Compra();
        $Compra->fecha_compra = $request->input('fecha_compra');
        $Compra->orden_compra = $request->input('orden_compra');
        $Compra->cantidad_compra = $request->input('cantidad_compra');
        $Compra->fk_producto = $request->input('fk_producto');
        $Compra->fk_proveedor = $request->input('fk_proveedor');


        $Compra->save();

        return redirect()->route('compra.listar')->with('Hecho', 'Compra creado exitosamente');
    }

    public function show (Compra $Compra)
    {
        //
    }

    public function edit(Compra $Compra, Request $request)
    {
        //
        $idCompra = $request->input('id_Compra');
        $Compra = Compra::find($idCompra);
        return view('compra.edit',['Compra' => $Compra]);
    }

    public function vistaedit(Request $request)
    {
        $idCompra = $request->input('id_Compra');
        $Compra = Compra::find($idCompra);
        return view('compra.edit',['Compra' => $Compra]);
    }

    public function update(Request $request)
    {
        //

        $validatedata = $request->validate( [
            'id_compra' => 'required',
            'fecha_compra' => 'required',
            'orden_compra' => 'required',
            'cantidad_compra' => 'required',
            'fk_producto' => 'required',
            'fk_proveedor' => 'required',
        ]);

        $Compra = new Compra();
        $Compra->fecha_compra = $request->input('fecha_compra');
        $Compra->orden_compra = $request->input('orden_compra');
        $Compra->cantidad_compra = $request->input('cantidad_compra');
        $Compra->fk_producto = $request->input('fk_producto');
        $Compra->fk_proveedor = $request->input('fk_proveedor');


        $Compra = Compra::find($request->input('id_compra'));

        $Compra->update();

        return redirect()->route('compra.listar')->with('Hecho', 'Compra editado exitosamente');
    }

    public function destroy(Request $request)
    {
        //
        $idCompra = $request->input('id_Compra');
        $Compra = Compra::find($idCompra);

        if($Compra){
            $Compra->delete();
            return redirect()-back()->with('Hecho', 'Compra eliminada exitosamente');
        }

        return redirect()->back()->with('Error', 'No se encontro el Compra');

    }
}
