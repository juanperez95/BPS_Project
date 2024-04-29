<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id_producto',
        'categoria_id',
        'descripcion_producto',
        'stock_producto',
        'entrega_producto',
        // Llaves foraneas de tabla categoria
    ];

    protected $primaryKey = 'id_producto';
}
