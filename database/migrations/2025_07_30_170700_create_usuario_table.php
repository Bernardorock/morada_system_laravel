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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('sobrenome')->nullable();
            $table->string('login')->nullable();
            $table->string('senha')->nullable();
            $table->string('telefone')->unique()->nullable();
            $table->timestamps('datacadastro');
            $table->string('administrador')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
