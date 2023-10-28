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
            $table->id();
            $table->string('tb02cep', 20)->nullable();
            $table->string('tb02estado', 255)->nullable();
            $table->string('tb02cidade', 255)->nullable();
            $table->string('tb02bairro', 255)->nullable();
            $table->string('tb02logradouro', 255)->nullable();
            $table->integer('tb02numero')->nullable();
            $table->double('tb02latitude',10,6)->nullable();
            $table->double('tb02longitude',10,6)->nullable();
            $table->unsignedBigInteger('tb02id_usuario')->nullable();
            $table->unsignedBigInteger('tb02id_unidade')->nullable();

            $table->foreign('tb02id_usuario')->references('id')->on('tb01usuarios');
            $table->foreign('tb02id_unidade')->references('id')->on('tb04unidades');
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
