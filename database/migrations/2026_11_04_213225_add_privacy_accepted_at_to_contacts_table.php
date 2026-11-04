<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Prueba de la autorización de tratamiento de datos (Ley 1581 de 2012, Decreto 1377 de 2013).
     */
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->timestamp('privacy_accepted_at')->nullable()->after('read');
        });
    }

    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('privacy_accepted_at');
        });
    }
};
