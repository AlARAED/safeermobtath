<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationRequest extends Model
{
    protected $guarded = array();
    public function teacherdepartment()
    {
        return $this->belongsTo(TeacherDepartment::class,'teacher_department_id');
    }

}
