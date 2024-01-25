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
        Schema::create('courses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->uuid('instructor_id');
            $table->foreign('instructor_id')->references('id')->on('instructors');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('instructor_name')->nullable();
            $table->date('register_starts_at')->nullable();
            $table->date('register_ends_at')->nullable();
            $table->integer('seats_available')->nullable();
            $table->string('price')->nullable();
            $table->string('hours')->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
