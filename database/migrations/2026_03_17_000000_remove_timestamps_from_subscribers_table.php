<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private $table = 'subscribers';

    public function up(): void
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }

    public function down(): void
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->timestamps();
        });
    }
};
