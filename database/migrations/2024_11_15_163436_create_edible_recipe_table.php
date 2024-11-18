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
        Schema::create('edible_recipe', function (Blueprint $table) {
            
            $table->unsignedBigInteger('edible_id');
            $table->foreign('edible_Id')->references('id')->on('edibles')->onDelete('cascade');

            $table->unsignedBigInteger('recipe_id');
            $table->foreign('recipe_Id')->references('id')->on('recepies')->onDelete('cascade');

            $table->primary(['recipe_id', 'edible_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edible_recipe');
    }
};
