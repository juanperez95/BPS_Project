<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('compras')->insert([
            [
                'fecha_compra' => Carbon::now(),
                'orden_compra' => 1001,
                'cantidad_compra' => 50,
                'proveedor_id' => 1, // Asegúrate de que este ID exista en la tabla proveedores
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha_compra' => Carbon::now(),
                'orden_compra' => 1002,
                'cantidad_compra' => 100,
                'proveedor_id' => 2, // Asegúrate de que este ID exista en la tabla proveedores
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha_compra' => Carbon::now(),
                'orden_compra' => 1003,
                'cantidad_compra' => 200,
                'proveedor_id' => 3, // Asegúrate de que este ID exista en la tabla proveedores
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
