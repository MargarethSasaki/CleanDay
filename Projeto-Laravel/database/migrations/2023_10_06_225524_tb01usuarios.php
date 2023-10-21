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
        Schema::create('tb01usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('tb01nome', 255)->notNullable();
            $table->string('tb01sobrenome', 255)->notNullable();
            $table->date('tb01dtNasc')->notNullable();
            $table->string('tb01email', 255)->unique()->notNullable();
            $table->string('tb01senha', 255)->notNullable();
            $table->string('tb01cep', 20)->nullable();
            $table->string('tb01telefone', 30)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb01usuarios');
    }
};
