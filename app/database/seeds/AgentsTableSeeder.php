<?php


class AgentsTableSeeder extends Seeder {

	public function run()
	{
		// $agent = array(
		// 	array('first_name' => 'Harish', 'mid_name' => 'Satish', 'last_name' => 'Patel', 'dob' => '1975-12-14', 'email' => 'Harish.Patel@gmail.com', 'mobile1' => '9819625365', 'mobile2' => 9819628555, 'landline1' => '', 'landline2' => '', 'locality' => 1),
		// 	array('first_name' => 'Ajay', 'mid_name' => 'Sudhakar', 'last_name' => 'patil', 'dob' => '1972-08-25', 'email' => 'Ajay.patil@gmail.com', 'mobile1' => '9819625366', 'mobile2' => '', 'landline1' => '', 'landline2' => '', 'locality' => 2),
		// 	array('first_name' => 'Shirish', 'mid_name' => 'Dhondu', 'last_name' => 'Patil', 'dob' => '1981-11-11', 'email' => 'Shirish.Patil@gmail.com', 'mobile1' => 9819625367, 'mobile2' => '', 'landline1' => '', 'landline2' => '', 'locality' => 3),
		// 	array('first_name' => 'Ramesh', 'mid_name' => 'Babulal', 'last_name' => 'Ghodi', 'dob' => '1980-08-04', 'email' => 'Ramesh.Ghodi@gmail.com', 'mobile1' => 9819625368, 'mobile2' => 9819628444, 'landline1' => '', 'landline2' => '', 'locality' => 4),
		// 	array('first_name' => 'Suresh', 'mid_name' => 'Aapa', 'last_name' => 'Pant', 'dob' => '1978-09-15', 'email' => 'Suresh.Pant@gmail.com', 'mobile1' => 9819625369, 'mobile2' => '', 'landline1' => '', 'landline2' => '', 'locality' => 5),
		// 	array('first_name' => 'Anees', 'mid_name' => 'Ahmed', 'last_name' => 'Mitha', 'dob' => '1987-05-13', 'email' => 'Anees.Mitha@gmail.com', 'mobile1' => 9819625370, 'mobile2' => '', 'landline1' => '', 'landline2' => '', 'locality' => 2),
		// );
		
		// DB::table('agents')->insert($agent);


		Agent::create(array('first_name' => 'Harish', 'mid_name' => 'Satish', 'last_name' => 'Patel', 'dob' => '1975-12-14', 'email' => 'Harish.Patel@gmail.com', 'mobile1' => '9819625365', 'mobile2' => 9819628555, 'landline1' => '', 'landline2' => '', 'locality' => 1));
		Agent::create(array('first_name' => 'Ajay', 'mid_name' => 'Sudhakar', 'last_name' => 'patil', 'dob' => '1972-08-25', 'email' => 'Ajay.patil@gmail.com', 'mobile1' => '9819625366', 'mobile2' => '', 'landline1' => '', 'landline2' => '', 'locality' => 5));
		Agent::create(array('first_name' => 'Shirish', 'mid_name' => 'Dhondu', 'last_name' => 'Patil', 'dob' => '1981-11-11', 'email' => 'Shirish.Patil@gmail.com', 'mobile1' => 9819625367, 'mobile2' => '', 'landline1' => '', 'landline2' => '', 'locality' => 9));
		Agent::create(array('first_name' => 'Ramesh', 'mid_name' => 'Babulal', 'last_name' => 'Ghodi', 'dob' => '1980-08-04', 'email' => 'Ramesh.Ghodi@gmail.com', 'mobile1' => 9819625368, 'mobile2' => 9819628444, 'landline1' => '', 'landline2' => '', 'locality' => 5));
		Agent::create(array('first_name' => 'Suresh', 'mid_name' => 'Aapa', 'last_name' => 'Pant', 'dob' => '1978-09-15', 'email' => 'Suresh.Pant@gmail.com', 'mobile1' => 9819625369, 'mobile2' => '', 'landline1' => '', 'landline2' => '', 'locality' => 5));
		Agent::create(array('first_name' => 'Anees', 'mid_name' => 'Ahmed', 'last_name' => 'Mitha', 'dob' => '1987-05-13', 'email' => 'Anees.Mitha@gmail.com', 'mobile1' => 9819625370, 'mobile2' => '', 'landline1' => '', 'landline2' => '', 'locality' => 9));

	}

}