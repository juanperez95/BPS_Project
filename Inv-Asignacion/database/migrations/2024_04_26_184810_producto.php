<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            // Foranea de categoria
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references("id_categoria")->on("categorias")->onDelete("cascade");
            $table->string('descripcion_producto');
            $table->string('stock_producto');
            $table->string('entrega_producto');       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
