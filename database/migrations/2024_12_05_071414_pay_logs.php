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
        Schema::create("pay_logs", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("pay_id");
            $table->integer("amount");
            $table->date("pay_date");
            $table->string("remark",1000)->nullable()->default(NULL);
            $table->string("status",6);
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
