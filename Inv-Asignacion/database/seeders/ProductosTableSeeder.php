<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'categoria_producto' => 'Electrónica',
                'descripcion_producto' => 'Smartphone de última generación',
                'stock_producto' => 150,
                'entrega_producto' => 50,
                'caso_asignacion' => 1,
                'compra_id' => 1, // Asegúrate de que este ID exista en la tabla compras
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'categoria_producto' => 'Electrónica',
                'descripcion_producto' => 'Laptop de alta gama',
                'stock_producto' => 100,
                'entrega_producto' => 30,
                'caso_asignacion' => 2,
                'compra_id' => 2, // Asegúrate de que este ID exista en la tabla compras
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'categoria_producto' => 'Accesorios',
                'descripcion_producto' => 'Cargadores USB',
                'stock_producto' => 500,
                'entrega_producto' => 200,
                'caso_asignacion' => 3,
                'compra_id' => 3, // Asegúrate de que este ID exista en la tabla compras
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
