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
        Schema::create('tb05materiais_unidades', function (Blueprint $table) {
            $table->id('tb05id')->notNullable();
            $table->integer('tb05id_unidade')->notNullable();
            $table->integer('tb05id_material')->notNullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb05materiais_unidades');
    }
};
