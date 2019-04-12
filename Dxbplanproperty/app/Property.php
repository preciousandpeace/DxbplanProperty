<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
	protected $fillable =  [
		'name', 'slug', 'image', 'images'
	];

	public function layouts() {

		return $this->hasMany('App\Layout');
	}
}
