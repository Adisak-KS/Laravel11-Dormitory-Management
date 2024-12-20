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
        Schema::table('organizations', function (Blueprint $table) {
            $table->integer('amount_water')->nullable()->default(null);
            $table->integer('amount_water_per_unit')->nullable()->default(null);
            $table->integer('amount_electric_per_unit')->nullable()->default(null);
            $table->integer('amount_internet')->nullable()->default(null);
            $table->integer('amount_etc')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('organizations', function (Blueprint $table) {
            //
        });
    }
};
