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
        schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('name',);
            $table->integer('price_per_day');
            $table->integer('price_per_month');
            $table->string('status', 6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
