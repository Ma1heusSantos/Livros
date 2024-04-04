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
        Schema::create('transacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('livro_id')->onDelete('cascade');
            $table->unsignedBigInteger('proprietario_id');
            $table->unsignedBigInteger('solicitante_id');
            $table->enum('status',['Pendente','Negada','Aprovada']);
            $table->date('data_emprestado')->nullable();
            $table->date('data_devolvido')->nullable();
            $table->timestamps();

            $table->foreign('livro_id')->references('id')->on('livros');
            $table->foreign('proprietario_id')->references('id')->on('users');
            $table->foreign('solicitante_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacoes');
    }
};
