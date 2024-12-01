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
        Schema::create('persona', function (Blueprint $table) {
            $table->id('persona_id')->primary()->unique();
            $table->string('nombre', 40);
            $table->string('paterno', 40);
            $table->string('materno', 40)->nullable();
            $table->string('usuario', 15);
            $table->string('password', 50);
            $table->string('email', 50)->unique();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
