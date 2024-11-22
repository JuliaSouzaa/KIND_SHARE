<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        DB::statement('ALTER TABLE doacoes MODIFY arquivo LONGBLOB');
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE doacoes MODIFY arquivo BLOB');
    }
};
