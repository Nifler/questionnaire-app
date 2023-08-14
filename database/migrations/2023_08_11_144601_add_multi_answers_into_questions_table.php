<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private $table = 'questions';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table($this->table, function($table) {
            $table->boolean('multi_answers')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table($this->table, function($table) {
            $table->dropColumn('multi_answers');
        });
    }
};
