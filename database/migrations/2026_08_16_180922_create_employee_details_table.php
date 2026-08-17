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
        //id(PK), employee_id(FK), phone, address, dob, image, salary, allowance, total_paid, fd,
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('phone');
            $table->string('address');
            $table->date('dob');
            $table->string('image')->nullable();
            $table->decimal('salary', 8, 2);
            $table->decimal('allowance', 8, 2);
            $table->decimal('total_paid', 8, 2);
            $table->decimal('fd', 8, 2);
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_details');
    }
};
