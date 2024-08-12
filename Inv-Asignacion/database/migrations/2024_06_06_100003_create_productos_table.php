<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto'); // Primary Key
            $table->string('nombre_producto');
            $table->string('categoria_producto');
            $table->string('descripcion_producto');
            $table->integer('stock_producto');
            $table->date('entrega_producto');
            $table->unsignedBigInteger('compra_id');
            $table->foreign('compra_id')->references('id_compra')->on('compras');
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
