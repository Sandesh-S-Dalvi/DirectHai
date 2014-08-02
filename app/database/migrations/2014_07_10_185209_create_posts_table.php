<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('locality_id')->unsigned();
			$table->integer('entity_id')->unsigned();
			$table->integer('plus_id')->unsigned();
			$table->integer('dealtype_id')->unsigned();
			$table->integer('for_id')->unsigned();
			$table->integer('size_id')->unsigned();
			$table->integer('rent_price_id')->unsigned();
			$table->integer('deposit_id')->unsigned();
			$table->integer('floor_id')->unsigned();
			$table->integer('amenities_id')->unsigned();
			$table->boolean('Status')->default(1);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
