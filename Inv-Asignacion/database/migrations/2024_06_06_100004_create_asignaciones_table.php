<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id('id_asignacion'); // Primary Key
            $table->date('fecha_asignacion');
            $table->string('solicitante_asignacion');
            $table->string('operacion_asignacion');
            $table->integer('cantidad_asignacion');
            $table->integer('caso_asignacion');
            $table->string('Serial_diadema_asignacion');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id_producto')->on('productos');
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
        Schema::dropIfExists('asignaciones');
    }
}
