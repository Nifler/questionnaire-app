<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('question_types')->insert([
            'id'          => 1,
            'title'       => 'Custom',
            'description' => 'Довільна відповідь',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('question_types')->where('id', 1)->delete();
    }
};
