<?php



class FilterTableSeeder extends Seeder {

	public function run()
	{

		Filter::create(array('filter' => 'plus', 'filter_op' => 'Direct'));
		Filter::create(array('filter' => 'plus', 'filter_op' => 'Plus 1'));
		Filter::create(array('filter' => 'plus', 'filter_op' => 'Plus 2'));
		Filter::create(array('filter' => 'plus', 'filter_op' => 'Plus 3'));
		Filter::create(array('filter' => 'deal_type', 'filter_op' => 'Residential'));
		Filter::create(array('filter' => 'deal_type', 'filter_op' => 'Commercial'));
		Filter::create(array('filter' => 'for', 'filter_op' => 'Rental'));
		Filter::create(array('filter' => 'for', 'filter_op' => 'Outright'));
		Filter::create(array('filter' => 'size', 'filter_op' => '1 RK'));
		Filter::create(array('filter' => 'size', 'filter_op' => '1 BHK'));
		Filter::create(array('filter' => 'size', 'filter_op' => '2 BHK'));
		Filter::create(array('filter' => 'size', 'filter_op' => '3 BHK'));
		Filter::create(array('filter' => 'size', 'filter_op' => 'Bungalow'));
		Filter::create(array('filter' => 'rent_type', 'filter_op' => 'Monthly Rent'));
		Filter::create(array('filter' => 'rent_type', 'filter_op' => 'Heavy Deposit'));
		Filter::create(array('filter' => 'rent', 'filter_op' => 'Rs.5000 - Rs.7000'));
		Filter::create(array('filter' => 'rent', 'filter_op' => 'Rs.7001 - Rs.10000'));
		Filter::create(array('filter' => 'rent', 'filter_op' => 'Rs.10001 - Rs.15000'));
		Filter::create(array('filter' => 'rent', 'filter_op' => 'Rs.15001 - Rs.25000'));
		Filter::create(array('filter' => 'rent', 'filter_op' => 'Rs.25000+'));
		Filter::create(array('filter' => 'deposit', 'filter_op' => 'Rs.50000 – Rs.70000'));
		Filter::create(array('filter' => 'deposit', 'filter_op' => 'Rs.70001 - Rs.100000'));
		Filter::create(array('filter' => 'deposit', 'filter_op' => 'Rs.100001 – Rs.150000'));
		Filter::create(array('filter' => 'deposit', 'filter_op' => 'Rs.150001 – Rs.250000'));
		Filter::create(array('filter' => 'deposit', 'filter_op' => 'Rs.250000+'));
		Filter::create(array('filter' => 'price', 'filter_op' => 'Rs.500000 – Rs.700000'));
		Filter::create(array('filter' => 'price', 'filter_op' => 'Rs.700001 – Rs.1000000'));
		Filter::create(array('filter' => 'price', 'filter_op' => 'Rs.1000001 – Rs.1500000'));
		Filter::create(array('filter' => 'price', 'filter_op' => 'Rs.1500001 – Rs.2500000'));
		Filter::create(array('filter' => 'price', 'filter_op' => 'Rs.2500001 – Rs.3500000'));
		Filter::create(array('filter' => 'price', 'filter_op' => 'Rs.3500001 – Rs.4500000'));
		Filter::create(array('filter' => 'price', 'filter_op' => 'Rs.4500001 – Rs.5500000'));
		Filter::create(array('filter' => 'price', 'filter_op' => 'Rs.5500001 – Rs.6500000'));
		Filter::create(array('filter' => 'floor', 'filter_op' => 'All'));
		Filter::create(array('filter' => 'floor', 'filter_op' => 'Ground Floor'));
		Filter::create(array('filter' => 'floor', 'filter_op' => 'First Floor'));
		Filter::create(array('filter' => 'floor', 'filter_op' => '2nd 3rd Floor'));
		Filter::create(array('filter' => 'floor', 'filter_op' => '4th - 8th Floor'));
		Filter::create(array('filter' => 'floor', 'filter_op' => 'Above 8th Floor'));
		Filter::create(array('filter' => 'amenities', 'filter_op' => 'Unfurnished'));
		Filter::create(array('filter' => 'amenities', 'filter_op' => 'Furnished'));


	}
}