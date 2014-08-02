<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('mid_name')->nullable();
			$table->string('last_name');
			$table->date('dob')->nullable();
			$table->string('email',"100");
			$table->bigInteger('mobile1');
			$table->bigInteger('mobile2')->nullable();
			$table->bigInteger('landline1')->nullable();
			$table->bigInteger('landline2')->nullable();
			$table->integer('locality');
			$table->integer('area');
			$table->integer('pincode');
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
		Schema::drop('agents');
	}

}
