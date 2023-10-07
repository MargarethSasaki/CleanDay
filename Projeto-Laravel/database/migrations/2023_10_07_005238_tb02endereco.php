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
            $table->integer('tb02id')->auto_increment()->unique();
            $table->string('tb02regiao', 255)->nullable();
            $table->string('tb02bairro', 255)->nullable();
            $table->string('tb02rua', 255)->nullable();
            $table->integer('tb02numero')->nullable();
            $table->integer('tb02id_usuario');
            $table->integer('tb02id_unidade');
        });
        Schema::table('tb02endereco', function (Blueprint $table) {
            $table->foreign('tb02id_unidade')->references('tb04id')->on('tb04unidades');
            $table->foreign('tb02id_usuario')->references('tb01id')->on('tb01usuarios');
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
