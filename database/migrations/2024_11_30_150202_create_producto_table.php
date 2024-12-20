<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabla producto
        Schema::create('producto', function (Blueprint $table) {
            $table->id('producto_id')->primary()->unique();
            $table->string('nombre', 50);
            $table->string('dimensiones', 50);
            $table->string('descripcion', 100);
            $table->string('tipo_prod', 50);
            $table->float('precio');
            $table->double('cantidad');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('persona_id')
            ->on('administrador')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};