<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProveedorController;

class Proveedor extends Model
{
    protected $table = 'proveedor';
    public $primaryKey = 'id_proveedor';

    protected $fillable = [
        'id_proveedor',
        'nombre',
        'nit',
        'direccion',
        'telefono',
        'email',
        'estado',
    ];
    public $timestamps = false;

    
}
