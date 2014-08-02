<?php


class LocalitiesTableSeeder extends Seeder {

	public function run()
	{
		// $locality = array(
		// 	array('locality' => 'Golden Nest', 'area' => 'Mira Road', 'Pincode' => '401107', 'city' => 'Thane', 'state' => 'Maharashtra'),
		// 	array('locality' => 'Kanakia', 'area' => 'Mira Road', 'Pincode' => '401107', 'city' => 'Thane', 'state' => 'Maharashtra'),
		// 	array('locality' => 'GCC', 'area' => 'Mira Road', 'Pincode' => '401107', 'city' => 'Thane', 'state' => 'Maharashtra'),
		// 	array('locality' => 'Hatkesh', 'area' => 'Mira Road', 'Pincode' => '401107', 'city' => 'Thane', 'state' => 'Maharashtra'),
		// 	array('locality' => 'Silver Park', 'area' => 'Mira Road', 'Pincode' => '401107', 'city' => 'Thane', 'state' => 'Maharashtra'),
		// 	);

		// DB::table('localities')->insert($locality);


		Locality::Create(array('locality' => 'Golden Nest', 'area' => 'Mira Road', 'Pincode' => '401107', 'city' => 'Thane', 'state' => 'Maharashtra'));
		Locality::Create(array('locality' => 'Kanakia', 'area' => 'Mira Road', 'Pincode' => '401107', 'city' => 'Thane', 'state' => 'Maharashtra'));
		Locality::Create(array('locality' => 'GCC', 'area' => 'Mira Road', 'Pincode' => '401107', 'city' => 'Thane', 'state' => 'Maharashtra'));
		Locality::Create(array('locality' => 'Hatkesh', 'area' => 'Mira Road', 'Pincode' => '401107', 'city' => 'Thane', 'state' => 'Maharashtra'));
		Locality::Create(array('locality' => 'Silver Park', 'area' => 'Mira Road', 'Pincode' => '401107', 'city' => 'Thane', 'state' => 'Maharashtra'));
		
	}

}