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
        'solicitante_asignacion',
        'operacion_asignacion',
        'cantidad_asignacion',
        'numero_caso_asignacion',
        'serial_diadema_asignacion',
        'id_producto',
    ];

    // Aquí podrías definir relaciones con otros modelos si es necesario
}
