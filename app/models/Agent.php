<?php

class Agent extends Eloquent {
	protected $fillable = [];

	public $timestamps = true;

	Public function entities()
	{
		return $this->hasMany('Entity');
	}

	Public function localities()
	{
		return $this->hasOne('Locality');
	}

}