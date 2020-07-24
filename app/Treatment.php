<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    //
    protected $guarded = [];
    protected $fillable = ['patient_name','treatment_name','description','treatment_date'];

    //one treatment , have one user

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //inverse company
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    //one game, one court
    // public function court()
    // {
    //     return $this->belongsTo('App\Court');
    // }

    //one game, many community
    // public function communities()
    // {
    //     return $this->belongsToMany('App\Community');
    // }
}
