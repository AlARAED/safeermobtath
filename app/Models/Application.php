<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $guarded = array();

   public function Country(){
        return Country::where('id',$this->country_id)->first();
    }

     public function City(){
        return City::where('id',$this->city_id)->first();
    }

    public function University(){
        return University::where('id',$this->university_id)->first();
    }


     public function Degree(){
        return Degree::where('id',$this->degree_id)->first();
    }
}
