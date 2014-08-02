<?php

class Post extends Eloquent {

	public $timestamps = true;

	Public function entity()
	{
		return $this->belongsTo('Entity');
	}

	Public function locality()
	{
		return $this->belongsTo('Locality');
	}

	Public function plus()
	{
		return $this->belongsTo('Filter','plus_id');
	}

	Public function dealtype()
	{
		return $this->belongsTo('Filter','dealtype_id');
	}

	Public function fortype()
	{
		return $this->belongsTo('Filter','for_id');
	}

	Public function size()
	{
		return $this->belongsTo('Filter','size_id');
	}
	
	Public function rentprice()
	{
		return $this->belongsTo('Filter','rent_price_id');
	}

	Public function deposit()
	{
		return $this->belongsTo('Filter','deposit_id');
	}

	Public function floor()
	{
		return $this->belongsTo('Filter','floor_id');
	}

	Public function amenity()
	{
		return $this->belongsTo('Filter','amenities_id');
	}

}