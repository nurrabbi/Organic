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
        //id(PK), employee_id(FK), salary_month,(salary+allowance), bonus, fd_amount, total_amount
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('salary_month');
            // calculate salary+allowance in controller and show in table
            $table->decimal('bonus', 8, 2);
            $table->decimal('fd_amount', 8, 2);
            $table->decimal('total_amount', 8, 2);
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salaries');
    }
};
