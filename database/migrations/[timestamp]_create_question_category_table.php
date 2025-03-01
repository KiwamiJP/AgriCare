<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Create table if it doesn't exist
        if (!Schema::hasTable('question_category')) {
            Schema::create('question_category', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('question_answer_id');
                $table->unsignedBigInteger('category_id');
                $table->timestamps();

                // Foreign keys
                $table->foreign('question_answer_id')
                    ->references('id')
                    ->on('question_answers')
                    ->onDelete('cascade');

                $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');

                // Indexes for faster queries
                $table->index(['question_answer_id', 'category_id']);
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('question_category');
    }
};
