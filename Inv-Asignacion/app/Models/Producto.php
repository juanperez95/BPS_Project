<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'id_producto',
        'categoria',
        'descripcion_producto',
        'stock_producto',
        'entrega_producto',
    ];

    // Aquí podrías definir relaciones con otros modelos si es necesario
}