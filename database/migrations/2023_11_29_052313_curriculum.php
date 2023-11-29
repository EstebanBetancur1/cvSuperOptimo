<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Curriculum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id'); // ID del usuario
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('titulo_curriculum');
            $table->string('titulo_trabajo');
            $table->string('foto');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('telefono');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('resumen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
