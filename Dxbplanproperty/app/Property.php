<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Akaunting\Money\Currency;
use Akaunting\Money\Money;

class Property extends Model
{
	protected $fillable =  [
		'name', 'slug', 'image', 'images'
	];

	public function layouts() {

		return $this->hasMany('App\Layout');
	}

	public function convertPrice() {

		return Money::USD($this->price, true); // '$500.00' converted
	}
}
