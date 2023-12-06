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
        Schema::create('slot_models', function (Blueprint $table) {
            $table->id();
            $table->string('batch_name');
            $table->integer('total_classes');
            $table->date('starting_date');
            $table->integer('number_of_students');
            $table->time('class_time');
            $table->string('days');
            $table->string('status');
            $table->integer('classes_done');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slot_models');
    }
};
