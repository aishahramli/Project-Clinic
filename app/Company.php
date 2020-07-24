<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = [
        'name',
        'address_address',
        'address_latitude',
        'address_longitude',
    ];

    //one to one, company to treatment
    public function treatment()
    {
        return $this->hasOne('App\Treatment');
    }

    
}
