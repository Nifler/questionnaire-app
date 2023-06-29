<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    private $table = 'question_conditions';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('poll_id');
            $table->unsignedInteger('question_id');
            $table->json('condition')->nullable();
            $table->boolean('active')->default(true);

            $table->timestamps();

            $table->foreign('poll_id')->references('id')->on('polls');
            $table->foreign('question_id')->references('id')->on('questions');
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
