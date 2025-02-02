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
        Schema::create('working', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('design_id')->unique();
            $table->integer('employee_id')->unique()->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('stage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('working');
    }
};
