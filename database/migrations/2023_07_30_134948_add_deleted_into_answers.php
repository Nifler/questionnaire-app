<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private $table = 'answers';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table($this->table, function($table) {
            $table->boolean('deleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table($this->table, function($table) {
            $table->dropColumn('deleted');
        });
    }
};
