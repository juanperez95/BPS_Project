<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';

    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'id_producto',
        'nombre_producto',
        'categoria_producto',	
        'descripcion_producto',
        'stock_producto',
        'entrega_producto',
    ];

    // Aquí podrías definir relaciones con otros modelos si es necesario
}