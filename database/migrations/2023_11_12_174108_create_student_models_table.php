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
        Schema::create('student_models', function (Blueprint $table) {
            $table->id();
            $table->string("student_name");
            $table->string("father_name");
            $table->string("mother_name");
            $table->string("image");
            $table->string("address");
            $table->date("date_of_birth");
            $table->float("height");
            $table->float("weight");
            $table->string("mobile_number");
            $table->date("date_of_joining");
            $table->enum('gender', ['Male', 'Female','other']);
            //unique() is used to create uniue id also go to app/models/modelname.php
            $table->string('s_code')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_models');
    }
};
