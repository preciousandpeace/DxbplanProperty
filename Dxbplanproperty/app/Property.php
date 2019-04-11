<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	protected $fillable =  [
		'name', 'slug', 'image', 'images'
	];

	public function settings() {

		return $this->hasMany('App\Settings');
	}
}
