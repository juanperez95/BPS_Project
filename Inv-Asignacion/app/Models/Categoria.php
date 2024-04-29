<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $timestamps = false;

    protected $fillable = [
        'id_categoria',
        'nombre_categoria'
    ];

    protected $primaryKey = 'id_categoria';
    
}
