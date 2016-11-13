<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('messages', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->integer('user-id-from')->unsigned();
            $table->foreign('user-id-from')->references('id')->on('users');
            $table->integer('user-id-to')->unsigned();
            $table->foreign('user-id-to')->references('id')->on('users');
            $table->string('message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function(Blueprint $table)
        {
            $table->drop();
        });
    }

}
