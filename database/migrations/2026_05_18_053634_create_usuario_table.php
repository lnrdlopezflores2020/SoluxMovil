<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuario', function (Blueprint $table) {
            // Se usa integer()->autoIncrement() para respetar la estructura original de tu SQL
            $table->integer('ID_usuario')->autoIncrement();
            $table->string('emai', 50); // Nota: en tu SQL dice "emai", lo dejé igual para no romper tu código.
            $table->string('rol_usuario', 50);
            $table->string('contrasenia', 500)->nullable();
            $table->string('codigo_2fa', 255)->nullable();
            $table->dateTime('expiracion_2fa')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};