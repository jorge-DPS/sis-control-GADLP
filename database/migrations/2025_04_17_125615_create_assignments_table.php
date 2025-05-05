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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_branch')->constrained('branches')->onDelete('cascade');
            $table->foreignId('id_admin')->constrained('users')->onDelete('cascade');
            // $table->date('fecha_creacion');
            $table->date('fecha_asignacion')->nullable();
            $table->enum('state', ['pendiente', 'asignada', 'en_proceso', 'finalizada'])->default('pendiente');
            $table->text('description_problem');
            $table->softDeletes(); // Esto agrega el campo deleted_at nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
