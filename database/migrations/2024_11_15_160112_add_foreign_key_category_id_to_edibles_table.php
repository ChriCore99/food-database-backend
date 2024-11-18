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
        Schema::table('edibles', function (Blueprint $table) {

            // dico di aggiungere la colonna "category_id" alla tabella "edibles"
            $table->unsignedBigInteger('category_id');
            // spiego che "category_id" fa riferimento all'id della tabella "categories"
            $table->foreign('category_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('edibles', function (Blueprint $table) {
            
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
