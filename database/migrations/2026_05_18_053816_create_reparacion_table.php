<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reparacion', function (Blueprint $table) {
            $table->integer('ID_rep')->autoIncrement();
            $table->text('descripcion')->nullable();
            $table->date('fec_inicio');
            $table->date('fec_est_entrega');
            $table->string('est_reparacion', 50);
            $table->integer('id_tel_fk')->nullable();
            $table->decimal('costo', 10, 2)->default(0.00);
            
            // Esto creará `created_at` y `updated_at` tal como lo tienes en tu SQL
            $table->timestamps(); 

            $table->foreign('id_tel_fk')
                  ->references('ID_tel')->on('dispositivo')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reparacion');
    }
};
