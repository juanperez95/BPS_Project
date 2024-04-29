<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class Categorias extends Controller
{
    public function index()
    {
        $Categoria = Categoria::all();
        return view('categoria.index')->with('Categoria', $Categoria);
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function store(Request $request)
    {
        //
        $categoria = new Categoria();
        $categoria->id_categoria = $request->input('id_categoria');
        $categoria->nombre_categoria = $request->input('nombre_categoria');
        $categoria->save();

        return redirect()->route('categoria.listar')->with('Hecho', 'Categoria creado exitosamente');
    }

    public function show (Categoria $Categoria)
    {
        //
    }

    public function edit(Categoria $Categoria, Request $request)
    {
        //
        $idCategoria = $request->input('idCategoria');
        $categoria = Categoria::find($idCategoria);
        $categoria->id_categoria = $request->input('id_categoria');
        $categoria->nombre_categoria = $request->input('nombre_categoria');
        return view('categoria.edit',['Categoria' => $Categoria]);
    }

    public function vistaedit(Request $request)
    {
        $idCategoria = $request->input('idCategoria');
        $categoria = Categoria::find($idCategoria);
        return view('categoria.edit',['Categoria' => $categoria]);
    }

    public function update(Request $request)
    {
        //

        $validatedata = $request->validate( [
            'id_categoria' => 'required',
            'nombre_categoria' => 'required',
        ]);

        
        $Categoria = Categoria::find($request->input('idCategoria'));
        $Categoria->id_categoria = $request->input('id_categoria');
        $Categoria->nombre_categoria = $request->input('nombre_categoria');
        
        $Categoria->update();

        return redirect()->route('categoria.listar')->with('Hecho', 'Categoria editado exitosamente');
    }

    public function destroy(Request $request)
    {
        //
        $idCategoria = $request->input('idCategoria');
        $categoria = Categoria::find($idCategoria);

        if($categoria){
            $categoria->delete();
            return redirect()-back()->with('Hecho', 'Categoria eliminada exitosamente');
        }

        return redirect()->back()->with('Error', 'No se encontro el Categoria');

    }
}
