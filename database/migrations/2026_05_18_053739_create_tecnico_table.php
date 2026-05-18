<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tecnico', function (Blueprint $table) {
            $table->integer('ID_tec')->autoIncrement();
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->string('tel_tecnico', 11);
            $table->integer('usuario_fk')->nullable()->unique();

            $table->foreign('usuario_fk')
                  ->references('ID_usuario')->on('usuario')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tecnico');
    }
};
