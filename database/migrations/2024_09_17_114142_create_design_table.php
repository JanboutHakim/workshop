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
        Schema::create('designs', function (Blueprint $table) {
            $table->increments('id')->foreign('Working.design_id');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('stage');
            $table->string('desc')->nullable();
            $table->boolean('finished');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('design');
    }
};
