<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dispositivo', function (Blueprint $table) {
            $table->integer('ID_tel')->autoIncrement();
            $table->string('tipo', 30);
            $table->string('marca', 20);
            $table->string('modelo', 20);
            $table->integer('id_client_fk')->nullable();

            $table->foreign('id_client_fk')
                  ->references('ID_client')->on('cliente')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dispositivo');
    }
};
