<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    protected $tableName = 'layouts';

    protected $fillable = [
        'name', 'slug'
    ];

    public function property()
    {

        return $this->belongsTo('App\Property');
    }
}
