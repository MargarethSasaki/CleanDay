
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
        Schema::create('tb05materiais_unidade', function (Blueprint $table) {
            $table->integer('tb05id')->auto_increment()->unique();
            $table->integer('tb05id_unidade')->notNullable();
            $table->integer('tb05id_material')->notNullable();
        });
        Schema::table('tb05materiais_unidade', function (Blueprint $table) {
            $table->foreign('tb05id_material')->references('tb03id')->on('tb03material');
            $table->foreign('tb05id_unidade')->references('tb04id')->on('tb04unidades');
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
