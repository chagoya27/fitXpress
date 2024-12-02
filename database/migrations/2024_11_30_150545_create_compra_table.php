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
        // Tabla compra
        Schema::create('compra', function (Blueprint $table) {
            $table->id('compra_id')->primary()->unique();
            $table->integer('cantidad');
            $table->date('fecha');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('persona_id')
            ->on('cliente')->onDelete('cascade');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('producto_id')
            ->on('producto')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra');
    }
};
