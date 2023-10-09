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
        Schema::create('practicas', function (Blueprint $table) {
            $table->id();
            $table->string("titulo", 100);
            $table->text("descripcion");
            $table->datetimes("fecha_inicio");
            $table->datetimes("fecha_fin");
            $table->boolean("is_valid")->default(true);
            $table->string("archivo", 250);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practicas');
    }
};
