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
        Schema::create('tb04unidades', function (Blueprint $table) {
            $table->id();
            $table->string('tb04nome', 255)->notNullable();
            $table->string('tb04horarioFunc', 255)->nullable();
            $table->text('tb04comentario')->nullable();
            $table->string('tb04email',255)->nullable();
            $table->string('tb04tel',30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb04unidades');
    }
};
