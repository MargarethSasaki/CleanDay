
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
            $table->id();
            $table->unsignedBigInteger('tb05id_unidade');
            $table->unsignedBigInteger('tb05id_material');

            $table->foreign('tb05id_unidade')->references('id')->on('tb04unidades');
            $table->foreign('tb05id_material')->references('id')->on('tb03material');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb05materiais_unidade');
    }
};
