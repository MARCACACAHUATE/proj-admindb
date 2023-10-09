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
        Schema::create('registro_semestres', function (Blueprint $table) {
            $table->id();
            $table->boolean("is_valid")->default(true);
            $table->dateTime("fecha_inicio");
            $table->dateTime("fecha_fin");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_semestres');
    }
};
