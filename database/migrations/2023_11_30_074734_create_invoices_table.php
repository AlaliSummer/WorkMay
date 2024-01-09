<?php

use App\Models\Invoice;
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
        Schema::create('invoices', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->uuid('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->integer('number');
            $table->string('company_name')->nullable();
            $table->string('reference_id');
            $table->unsignedDecimal('sub_total');
            $table->unsignedDecimal('tax');
            $table->unsignedDecimal('grand_total');
            $table->timestamp('issued_at')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->tinyInteger('status')->default(Invoice::STATUS_UNPAID);
            $table->date('sent_at')->nullable();
            $table->uuid('created_by_id')->nullable();
            $table->foreign('created_by_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
