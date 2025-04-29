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
        Schema::create('technical_assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assignments_id')->constrained('assignments');
            $table->foreignId('technical_id')->constrained('users');
            // $table->dateTime('fecha_inicio')->nullable();
            // $table->dateTime('fecha_fin')->nullable();
            $table->enum('state', ['asignado', 'en_proceso', 'finalizado'])->default('asignado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical_assignments');
    }
};
