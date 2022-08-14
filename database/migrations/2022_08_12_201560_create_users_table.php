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
            $table->string('diagnosticado')->nullable();
            $table->string('sintomasAdicionales')->nullable();
            $table->string('fiebre')->nullable();
            $table->string('erupciones')->nullable();
            $table->string('tos')->nullable();
            $table->string('doloresMusculares')->nullable();
            $table->string('dolorCabeza')->nullable();
            $table->string('vomito')->nullable();
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
