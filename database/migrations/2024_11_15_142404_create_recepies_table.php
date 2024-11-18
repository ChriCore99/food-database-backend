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
        Schema::create('recepies', function (Blueprint $table) {
            $table->id();

            // il tipo di dato "string" può contenere fino a un massimo di N. carateri testuali in base a quanto specificato di seguito (il limite massimo è 255)
            $table->string('recipe_name', 150);

            // il tipo di dato "text" può contenere fino a 65535 carateri di testo
            $table->text('personal_notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepies');
    }
};
