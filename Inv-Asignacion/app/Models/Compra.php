<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';

    protected $primaryKey = 'id_compra';

    protected $fillable = [
        'id_compra',
        'fecha_compra',
        'orden_compra',
        'cantidad_compra',
        'proveedor_id',
    ];

    // Aquí podrías definir relaciones con otros modelos si es necesario
}