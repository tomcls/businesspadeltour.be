<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_sessions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('player_one')->unsigned();
            $table->bigInteger('player_two')->unsigned();
            $table->bigInteger('session_id')->unsigned();
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('player_one')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('player_two')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unique(array('player_one', 'player_two','session_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player_sessions', function (Blueprint $table) {
            //
        });
    }
};
