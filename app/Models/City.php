<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = array();
    public function Country(){
        return Country::where('id',$this->country_id)->first();
    }

}
