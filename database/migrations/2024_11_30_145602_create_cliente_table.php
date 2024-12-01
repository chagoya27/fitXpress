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
              // Tabla cliente
        Schema::create('cliente', function (Blueprint $table) {
                $table->unsignedBigInteger('persona_id')->primary()->unique();
                $table->foreign('persona_id')->references('persona_id')
                ->on('persona')->onDelete('cascade');
                $table->binary('tarjeta',1);
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
