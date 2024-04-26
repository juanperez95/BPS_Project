<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    $proveedor = Proveedor::create([
        'id_proveedor' => '0001',
        'nombre' => 'PYM Mayorista',
        'nit' => '123456789',
        'direccion' => 'Calle 123',
        'telefono' => '3000000000',
        'email' => 'pymmayorista@gmail.com.com',
        'estado' => 'Activo',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
      ]);
}
