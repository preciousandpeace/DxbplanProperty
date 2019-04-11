<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
	protected $fillable =  [
		'name', 'slug'
	];

	public function property() {

		return $this->belongsTo('App\Property');
	}
}
