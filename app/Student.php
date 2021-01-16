<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];
    public function classroomable()
    {
        return $this->morphOne(Classroom::class, 'classroomable');
    }
    public function biodataable()
    {
        return $this->morphOne(Biodata::class, 'biodataable');
    }
}
