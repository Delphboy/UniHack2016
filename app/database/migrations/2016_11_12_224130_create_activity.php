<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::table('activities', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('date-start');
            $table->string('date-end');			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activities', function(Blueprint $table)
        {
            $table->drop();
        });
    }

}
