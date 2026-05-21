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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Cria coluna de texto para o nome
            $table->string('name'); // Uma coluna de texto para o nome
            $table->text('description')->nullable(); // Texto longo que pode ser vazio
            $table->decimal('price', 8, 2); // Preço com 2 casas decimais
            $table->integer('stock')->default(0); // Inteiro que começa em zero
            $table->timestamps(); // Cria as colunas create_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
