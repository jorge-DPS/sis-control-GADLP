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
            // $table->foreignId('usuario_log_id')->constrained('usuarios')->onDelete('cascade');
            $table->string('cod_assignment');
            $table->string('id_user_logged');
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('branch_id')->constrained('branches')->onDelete('cascade');
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
