<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            [
                'nombre_proveedor' => 'Proveedor A',
                'ubicacion_proveedor' => 'Ubicación A',
                'contacto_proveedor' => 'contactoA@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre_proveedor' => 'Proveedor B',
                'ubicacion_proveedor' => 'Ubicación B',
                'contacto_proveedor' => 'contactoB@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre_proveedor' => 'Proveedor C',
                'ubicacion_proveedor' => 'Ubicación C',
                'contacto_proveedor' => 'contactoC@example.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
