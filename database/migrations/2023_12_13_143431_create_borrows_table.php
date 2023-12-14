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
        Schema::create('borrows', function (Blueprint $table) {
            $table->id('borrowId');
            $table->unsignedBigInteger('studentId');
            $table->foreign('studentId')->on('students')->references('studentId');
            $table->unsignedBigInteger('bookId');
            $table->foreign('bookId')->on('books')->references('bookId');
            $table->date('taken_date');
            $table->date('brought_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrows');
    }
};
