<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = [];
    public function classroomable()
    {
        return $this->morphTo();
    }
}
