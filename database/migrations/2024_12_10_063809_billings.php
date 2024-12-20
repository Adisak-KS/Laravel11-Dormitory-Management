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
        Schema::create("billings", function (Blueprint $table) {
            $table->increments("id");
            $table->integer('room_id');
            $table->string('remark', 1000)->nullable()->default(null);
            $table->dateTime('created_at');
            $table->string('status', 6)->default('use');
            $table->integer('amount_rent');
            $table->integer('amount_water');
            $table->integer('amount_electric');
            $table->integer('amount_internet');
            $table->integer('amount_fitness');
            $table->integer('amount_wash');
            $table->integer('amount_bin');
            $table->integer('amount_etc');
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
