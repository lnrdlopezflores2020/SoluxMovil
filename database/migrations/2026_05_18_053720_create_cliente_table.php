<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->integer('ID_client')->autoIncrement();
            $table->string('nombre', 50);
            $table->string('apellido', 30);
            $table->string('telefono', 11);
            $table->string('direccion', 100);
            $table->integer('num_ext');
            $table->string('num_int', 10)->nullable();
            $table->integer('usuario_fk')->nullable()->unique();

            $table->foreign('usuario_fk')
                  ->references('ID_usuario')->on('usuario')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};