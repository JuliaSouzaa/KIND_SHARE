<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('apadrinhamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Relaciona com o usuário registrado
            $table->string('sexo_padrinho'); // Novo campo: sexo
            $table->string('estado_padrinho'); // Novo campo: estado
            $table->timestamps();
    
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apadrinhamentos');
    }
};
