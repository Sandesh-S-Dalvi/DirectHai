<?php

class Locality extends Eloquent {
	protected $fillable = [];

	public $timestamps = true;


	Public function post()
	{
		return $this->hasMany('Post');
	}

	Public function entity()
	{
		return $this->hasMany('Entity');
	}


}