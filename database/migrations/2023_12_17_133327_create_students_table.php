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
        Schema::create('students', function (Blueprint $table) {
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
            $table->string("email");
            $table->date("date_of_joining");
            $table->enum('gender', ['Male', 'Female','other']);
            $table->string('slot_id');
            $table->string('s_code');
            $table->integer('attended_class');
            $table->integer('fees');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
