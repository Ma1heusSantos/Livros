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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('titulo');
            $table->string('autor');
            $table->string('descricao');
            $table->unsignedBigInteger('user_id');
            $table->enum('estado_de_conservacao',['Ruim','Regular','Bom','Otimo']);
            $table->enum('genero',["Ficção Científica", "Fantasia", "Romance", "Suspense", "Mistério", "Terror", "Não Ficção", "Biografia", "Autoajuda", "História", "Poesia", "Aventura"]);
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
