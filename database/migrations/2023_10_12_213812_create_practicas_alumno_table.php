c<?php

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
        Schema::create('practicas_alumno', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('practica_id');
            $table->unsignedBigInteger('alumno_id');
            $table->string('archivo', 250);

            $table->foreign('alumno_id')->references('alumno_id')->on('reservaciones');
            $table->foreign('practica_id')->references('practica_id')->on('reservaciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practicas_alumnos');
    }
};

