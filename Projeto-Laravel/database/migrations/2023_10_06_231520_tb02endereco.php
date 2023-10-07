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
        Schema::create('tb02endereco', function (Blueprint $table) {
            $table->id('tb02id')->notNullable();
            $table->string('tb02regiao', 255)->nullable();
            $table->string('tb02bairro', 255)->nullable();
            $table->string('tb02rua', 255)->nullable();
            $table->integer('tb02numero')->nullable();
            $table->integer('tb02id_usuario')->nullable();
            $table->integer('tb02id_unidade')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb02endereco');
    }
};
