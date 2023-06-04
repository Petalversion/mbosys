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
        Schema::table('table_obre', function (Blueprint $table) {
            //
            $table->string('obre_part',999);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('table_obre', function (Blueprint $table) {
            //

            $table->dropColumn('obre_part');
        });
    }
};
