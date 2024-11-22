<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('doacoes', function (Blueprint $table) {
            $table->string('instituicao')->after('email'); // Insere a coluna depois do campo email
        });
    }

    public function down(): void
    {
        Schema::table('doacoes', function (Blueprint $table) {
            $table->dropColumn('instituicao');
        });
    }
};
