<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('id_proveedor'); // Primary Key
            $table->string('nombre_proveedor');
            $table->integer('nit_proveedor')->nullable();
            $table->string('direccion_proveedor')->nullable();
            $table->integer('telefono_proveedor')->nullable();
            $table->string('email_proveedor')->nullable();
            $table->string('estado_proveedor')->nullable();
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
        Schema::dropIfExists('proveedores');
    }
}
