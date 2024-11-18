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
        Schema::create('unedibles', function (Blueprint $table) {
            $table->id();

            // il tipo di dato "string" può contenere fino a un massimo di N. carateri testuali in base a quanto specificato di seguito (il limite massimo è 255)
            $table->string('product_name', 150);

            // il tipo di dato "string" può contenere fino a un massimo di N. carateri testuali in base a quanto specificato di seguito (il limite massimo è 255)
            $table->string('brand_name', 100)->nullable();

            // il tipo di dato "double" permette di gestire numeri fino a N. cifre totali(compreso quelle dopo la virgola) arrotondando a N. cifre dopo la virgola 
            // in questo caso 6 tot e 2 dopo al virgola (9999,99) 
            $table->double('price', 6, 2);

            // il tipo di dato "text" può contenere fino a 65535 carateri di testo
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unedibles');
    }
};
