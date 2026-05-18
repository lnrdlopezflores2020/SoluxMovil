<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->integer('Id_admin')->autoIncrement();
            $table->string('nombre', 20)->nullable();
            $table->string('apellido', 30)->nullable();
            $table->integer('usuario_fk')->nullable()->unique(); // unique() por las llaves uq_admin_usuario

            $table->foreign('usuario_fk')
                  ->references('ID_usuario')->on('usuario')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('administrador');
    }
};
