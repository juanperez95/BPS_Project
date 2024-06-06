<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Asignaciones extends Model
{
    protected $table = 'asignaciones';

    protected $primaryKey = 'id_asignacion';

    protected $fillable = [
        'fecha_asignacion',
        'solicitante',
        'operacion',
        'cantidad',
        'numero_caso',
        'serial_diadema',
        'id_producto',
    ];

    // Aquí podrías definir relaciones con otros modelos si es necesario
}
