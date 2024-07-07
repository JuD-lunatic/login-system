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
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->integer('student_num');
            $table->string('course');
            $table->string('year_level');
            $table->string('department');
            $table->float('epgf_average')->nullable();
            $table->float('cerf_rating')->nullable();
            $table->string('cerf_category')->nullable();
            $table->string('discriptor')->nullable();
            $table->float('pronunciation_average')->nullable();
            $table->float('fluency_average')->nullable();
            $table->float('grammar_average')->nullable();
            $table->string('password');
            $table->string('username')->unique();
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
