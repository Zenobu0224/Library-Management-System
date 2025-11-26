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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('txn_no');

            // student_id column and foreign key
            $table->string('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');

            // book_id column and foreign key
            $table->unsignedBigInteger('book_id'); // matches books.id type
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->datetime('date_borrowed');
            $table->string('by');
            $table->datetime('date_added');
            $table->datetime('due_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
