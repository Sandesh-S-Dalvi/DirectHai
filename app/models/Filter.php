<?php

class Filter extends Eloquent {
	
	protected $fillable = [];

	public $timestamps = true;

	Public function post()
	{
		return $this->hasMany('Post');
	}

}