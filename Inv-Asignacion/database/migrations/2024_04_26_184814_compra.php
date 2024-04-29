<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id('id_compra');
            $table->dateTime('fecha_compra');
            $table->string('orden_compra');
            $table->bigInteger('cantidad_compra');
            // Foraneas de producto, proveedor
            $table->unsignedBigInteger('id_proveedor');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_proveedor')->references("id")->on("proveedor")->onDelete("cascade");
            $table->foreign('id_producto')->references("id_producto")->on("productos")->onDelete("cascade");
        });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
