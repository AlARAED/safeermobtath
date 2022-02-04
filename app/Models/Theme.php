<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{

    protected $guarded = array();

    public function category(){
        return  Category::where('id',$this->category_id)->first();
    }
    public function city(){
        return  City::where('id',$this->city_id)->first();
    }
}
