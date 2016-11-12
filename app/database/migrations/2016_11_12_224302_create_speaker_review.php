<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeakerReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::table('speaker-reviews', function(Blueprint $table)
        {
            $table->increments('id')->unsigned();
            $table->foreign('activity-id')->references('id')->on('activities');
            $table->foreign('reviewer')->references('id')->on('users');
            $table->string('review');
            $table->integer('rating');			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speaker-reviews', function(Blueprint $table)
        {
            $table->drop();
        });
    }


}