<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::create('activity_tags', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->integer('activity-id')->unsigned();
            $table->foreign('activity-id')->references('id')->on('activities');
            $table->integer('tag-id')->unsigned();
            $table->foreign('tag-id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activity-tags', function(Blueprint $table)
        {
            $table->drop();
        });
    }

}
