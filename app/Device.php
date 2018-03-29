<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{

	protected $table = 'devices';

	    public function city()
    {
        return $this->belongsTo('App\City');
    }

        public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

}
