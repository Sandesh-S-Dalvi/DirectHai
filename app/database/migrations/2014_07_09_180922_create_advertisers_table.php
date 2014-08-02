<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertisersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advertisers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company_name');
			$table->string('email');
			$table->integer('mobile1');
			$table->integer('mobile2')->nullable();
			$table->integer('landline1')->nullable();
			$table->integer('landline2')->nullable();
			$table->integer('locality_id');
			$table->integer('area_id');
			$table->integer('pincode_id');
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
		Schema::drop('advertisers');
	}

}
