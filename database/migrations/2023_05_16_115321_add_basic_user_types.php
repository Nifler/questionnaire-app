<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBasicUserTypes extends Migration
{
    private $table = 'user_types';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table($this->table)->insert([
            [
                'title' => 'admin',
                'description' => 'Administrator',
            ],
            [
                'title' => 'user',
                'description' => 'Customer'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
