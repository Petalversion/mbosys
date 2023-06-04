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
        Schema::create('table_adjustments', function (Blueprint $table) {
            $table->id();
            $table->string('office_code',20);
            $table->foreign('office_code')->references('office_code')->on('table_offices');
            $table->string('acct_code',30);
            $table->foreign('acct_code')->references('acct_code')->on('table_accounts');
            $table->decimal('adj_amount',65,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_adjustments');
    }
};
