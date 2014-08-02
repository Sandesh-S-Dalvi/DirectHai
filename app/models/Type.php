<?php

class Type extends Eloquent {
	protected $fillable = [];

	public $timestamps = true;

	Public function entity()
	{
		return $this->hasMany('Entity');
	}
}