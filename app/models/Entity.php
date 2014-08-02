<?php

class Entity extends Eloquent {
	protected $fillable = [];

	public $timestamps = true;

	Public function posts()
	{
		return $this->hasMany('Post');
	}

	Public function agent()
	{
		return $this->belongsTo('Agent');
	}

	Public function locality()
	{
		return $this->belongsTo('Locality');
	}

	Public function shoptype()
	{
		return $this->belongsTo('Type','shoptype_id');
	}

	Public function entitytype()
	{
		return $this->belongsTo('Type','entitytype_id');
	}

}