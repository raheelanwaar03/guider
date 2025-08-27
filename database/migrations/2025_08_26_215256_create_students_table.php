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
            $table->string('student_id')->unique();
            $table->string('fname');
            $table->string('lname');
            $table->string('mname')->nullable();
            $table->string('passport_no')->unique();
            $table->string('passport_expirey');
            $table->string('gender');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('status');
            $table->string('referral');
            $table->string('country_of_interest')->nullable();
            $table->string('country_of_edu')->nullable();
            $table->string('edu_level')->nullable();
            $table->string('grading_scheme')->nullable();
            $table->string('grading_average')->nullable();
            $table->string('rejection');
            $table->string('profile_pic')->nullable();
            $table->string('added_by');
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
