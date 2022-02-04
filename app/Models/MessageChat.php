<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class MessageChat extends Model
{
    protected $guarded = array();
    public function sender(){
        return $this->belongsTo(User::class,'sender_id');
    }
    public function reciver(){
        return $this->belongsTo(User::class,'reciver_id');
    }
}
