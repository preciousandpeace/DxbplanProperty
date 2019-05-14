<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Akaunting\Money\Currency;
use Akaunting\Money\Money;

class Layout extends Model
{
    protected $tableName = 'layouts';

    protected $fillable = [
        'name', 'slug'
    ];

    public function property()
    {

        return $this->hasMany('App\Property');
    }

	public function convertPrice() {

		return Money::USD($this->price, true); // '$500.00' converted
	}
}
