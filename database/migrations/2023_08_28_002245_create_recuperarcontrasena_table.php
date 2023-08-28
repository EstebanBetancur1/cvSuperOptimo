<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecuperarcontrasenaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recuperarcontrasena', function (Blueprint $table) {
            $table->id(); // ID único autoincremental
            $table->unsignedBigInteger('user_id'); // ID del usuario
            $table->string('token');
            $table->boolean('status')->default(0); // Status con valor predeterminado de 0
            $table->timestamps(); // Crea automáticamente created_at y updated_at

            // Clave foránea para el ID del usuario
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recuperarcontrasena');
    }
}
