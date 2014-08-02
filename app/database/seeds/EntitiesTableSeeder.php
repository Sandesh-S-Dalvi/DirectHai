<?php


class EntitiesTableSeeder extends Seeder {

	public function run()
	{
		// $entity = array(
		// 	array('entityname' => 'Harish Real Estate Consultant', 'agent_id' => '1', 'locality_id' => '1', 'shoptype_id' => '1', 'entitytype_id' => '4'),
		// 	array('entityname' => 'Ajay Real Estate Agency', 'agent_id' => '2', 'locality_id' => '2', 'shoptype_id' => '2', 'entitytype_id' => '5'),
		// 	array('entityname' => 'Shirish Real Estate Consultant', 'agent_id' => '3', 'locality_id' => '3', 'shoptype_id' => '3', 'entitytype_id' => '6'),
		// 	array('entityname' => 'Ramesh Real Estate Agency', 'agent_id' => '4', 'locality_id' => '4', 'shoptype_id' => '1', 'entitytype_id' => '7'),
		// 	array('entityname' => 'Suresh Real Estate Consultant', 'agent_id' => '5', 'locality_id' => '5', 'shoptype_id' => '2', 'entitytype_id' => '6'),
		// 	array('entityname' => '5star Real Estate Agency', 'agent_id' => '6', 'locality_id' => '2', 'shoptype_id' => '3', 'entitytype_id' => '7'),
		// 	);

		// DB::table('entities')->insert($entity);


		Entity::create(array('entityname' => 'Harish Real Estate Consultant', 'agent_id' => '1', 'locality_id' => '1', 'shoptype_id' => '1', 'entitytype_id' => '13'));
		Entity::create(array('entityname' => 'Ajay Real Estate Agency', 'agent_id' => '5', 'locality_id' => '9', 'shoptype_id' => '5', 'entitytype_id' => '17'));
		Entity::create(array('entityname' => 'Shirish Real Estate Consultant', 'agent_id' => '9', 'locality_id' => '13', 'shoptype_id' => '9', 'entitytype_id' => '21'));
		Entity::create(array('entityname' => 'Ramesh Real Estate Agency', 'agent_id' => '13', 'locality_id' => '17', 'shoptype_id' => '1', 'entitytype_id' => '25'));
		Entity::create(array('entityname' => 'Suresh Real Estate Consultant', 'agent_id' => '17', 'locality_id' => '9', 'shoptype_id' => '5', 'entitytype_id' => '29'));
		Entity::create(array('entityname' => '5star Real Estate Agency', 'agent_id' => '21', 'locality_id' => '1', 'shoptype_id' => '9', 'entitytype_id' => '25'));

	}

}