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
        Schema::create("customers", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("room_id");
            $table->string("name", 255);
            $table->string("phone", 50);
            $table->string("address", 1000);
            $table->dateTime("created_at");
            $table->string("remark", 1000);
            $table->string("status", 6);
           
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
