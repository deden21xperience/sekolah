<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Biodata extends Model
{
    protected $guarded = [];
    public function biodataable()
    {
        return $this->morphTo();
    }
}
