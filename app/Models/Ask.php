<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Ask extends Model
{
    protected $guarded = array();
    public function userName(){
        return User::where('id',$this->user_id)->first();
    }
}
