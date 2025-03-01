<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('questions', function (Blueprint $table) {
        $table->id();
        $table->text('question');
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->json('photos')->nullable();
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('question_answers');
    }
};
