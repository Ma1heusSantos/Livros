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
            $table->unsignedBigInteger('livro_id');
            $table->unsignedBigInteger('proprietario_id');
            $table->unsignedBigInteger('solicitante_id');
            $table->text('observacao');
            $table->integer('avaliacao');
            $table->date('data_cancelado');
            $table->date('data_emprestado');
            $table->date('data_devolvido');
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
