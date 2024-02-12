<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('finance_models', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->integer('admission_fees');
            $table->integer('amount');
            $table->string('month')->default(Carbon::now()->format('F'));
            $table->string('year');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_models');
    }
};
