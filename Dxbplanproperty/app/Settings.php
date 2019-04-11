<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
	protected $fillable =  [
		'name'
	];

	public function property() {

		return $this->belongsTo(Property::class);
	}
}
