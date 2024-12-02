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
    Schema::create('product', function (Blueprint $table) {
        $table->id(); // Columna ID primaria
        $table->string('name'); // Columna para el nombre
        $table->text('description'); // Columna para la descripción
        $table->decimal('price', 8, 2); // Columna para el precio con dos decimales
        $table->string('image')->nullable(); // Columna para la imagen, nullable si no siempre es requerida
        $table->timestamps(); // Columna para created_at y updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
