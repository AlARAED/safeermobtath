<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $guarded = array();
    public function Country(){
        return Country::where('id',$this->country_id)->first();
    }

    public function City(){
        return City::where('id',$this->city_id)->first();
    }

}
