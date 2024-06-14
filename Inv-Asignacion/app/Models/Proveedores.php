<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProveedorController;

class Proveedores extends Model
{
    protected $table = 'proveedores';
    public $primaryKey = 'id_proveedor';

    protected $fillable = [
        'id_proveedor',
        'nombre_proveedor',
        'nit_proveedor',
        'direccion_proveedor',
        'telefono_proveedor',
        'email_proveedor',
        'estado_proveedor',
    ];
    public $timestamps = false;

    
}
