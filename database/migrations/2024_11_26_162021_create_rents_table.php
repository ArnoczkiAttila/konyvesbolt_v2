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
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->unsignedBigInteger('book_id')->nullable();
            $table->date('rented_at');
            $table->date('returned_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('book_id')->on('books')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rents');
    }
};
