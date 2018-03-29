<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table = 'customers';

    public function devices()
    {
        return $this->hasMany('App\Device');
    }



}
