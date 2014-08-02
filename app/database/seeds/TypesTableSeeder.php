<?php


class TypesTableSeeder extends Seeder {

	public function run()
	{
		// $type = array(
		// 	array('type' => 'shoptype', 'type_op' => 'Owned'),
		// 	array('type' => 'shoptype', 'type_op' => 'Leased'),
		// 	array('type' => 'shoptype', 'type_op' => 'Mobile'),
		// 	array('type' => 'entitytype', 'type_op' => 'Properitory'),
		// 	array('type' => 'entitytype', 'type_op' => 'Properitory'),
		// 	array('type' => 'entitytype', 'type_op' => 'Partnership'),
		// 	array('type' => 'entitytype', 'type_op' => 'LLP'),
		// 	array('type' => 'entitytype', 'type_op' => 'Company'),
		// 	);

		// DB::table('types')->insert($type);


		Type::create(array('type' => 'shoptype', 'type_op' => 'Owned'));
		Type::create(array('type' => 'shoptype', 'type_op' => 'Leased'));
		Type::create(array('type' => 'shoptype', 'type_op' => 'Mobile'));
		Type::create(array('type' => 'entitytype', 'type_op' => 'Properitory'));
		Type::create(array('type' => 'entitytype', 'type_op' => 'Properitory'));
		Type::create(array('type' => 'entitytype', 'type_op' => 'Partnership'));
		Type::create(array('type' => 'entitytype', 'type_op' => 'LLP'));
		Type::create(array('type' => 'entitytype', 'type_op' => 'Company'));
			
		
	}

}