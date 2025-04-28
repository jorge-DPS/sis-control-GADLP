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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Relación con user_types (rol del usuario)
            $table->unsignedBigInteger('user_type_id');
            $table->foreign('user_type_id')->references('id')->on('user_types');

            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // Extras
            $table->string('phone')->nullable();
            $table->string('identity_card')->unique();
            $table->string('photo')->nullable(); // Nombre de archivo o URL
            $table->string('cod_user');

            // Estado
            $table->enum('state', ['activo', 'inactivo'])->default('activo');

            $table->softDeletes(); // Esto agrega el campo deleted_at nullable
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
