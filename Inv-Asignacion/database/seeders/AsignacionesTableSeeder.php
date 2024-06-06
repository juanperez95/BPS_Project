<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AsignacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignaciones')->insert([
            'fecha_asignacion' => Carbon::now(),
            'solicitante_asignacion' => 'Juan Perez',
            'operacion_asignacion' => 'Compra',
            'cantidad_asignacion' => 100,
            'caso_asignacion' => 1,
            'Serial_diadema_asignacion' => '123456789',
            'producto_id' => 1, // Asegúrate de que este ID exista en la tabla productos
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
