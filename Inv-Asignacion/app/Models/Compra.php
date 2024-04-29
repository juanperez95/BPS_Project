<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id_compra',
        'fecha_compra',
        'orden_compra',
        'cantidad_compra',
        // llave foranea de proveedor, producto
        'fk_producto',
        'fk_proveedor',
    ];

    protected $primaryKey = 'id_compra';
}
