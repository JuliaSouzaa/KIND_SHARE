<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('doacoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->text('mensagem')->nullable();
            $table->string('arquivo_nome')->nullable(); // Nome do arquivo
            $table->binary('arquivo')->nullable(); // Conteúdo binário do arquivo
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doacoes');
    }
};
