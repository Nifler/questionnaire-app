<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private $table = 'responds';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('poll_id');
            $table->unsignedInteger('question_id');
            $table->unsignedInteger('question_type_id');
            $table->unsignedInteger('answer_id');
            $table->unsignedInteger('user_id');

            $table->timestamps();

            $table->foreign('poll_id')->references('id')->on('polls');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('question_type_id')->references('id')->on('question_types');
            $table->foreign('answer_id')->references('id')->on('answers');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->table);
    }
};
