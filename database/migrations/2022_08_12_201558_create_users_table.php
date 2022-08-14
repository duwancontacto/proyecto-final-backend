<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('correo');
            $table->string('role');
            $table->string('clave');
            $table->string('cedula');
            $table->string('edad');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('diagnosticado');
            $table->string('sintomasAdicionales');
            $table->string('fiebre');
            $table->string('erupciones');
            $table->string('tos');
            $table->string('doloresMusculares');
            $table->string('dolorCabeza');
            $table->string('vomito');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
