<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class TeacherDepartment extends Model
{


    protected $guarded = array();

    public function userName(){
        return User::where('id',$this->user_id)->first();
    }


    public function lessonName(){
        return Lesson::where('id',$this->lesson_id)->first();
    }

    public function reservation()
    {

        return $this->belongsToMany(ReservationRequest::class,'teacher_department_id');
    }

}
