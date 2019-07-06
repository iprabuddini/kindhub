<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function class()
    {
        return $this->belongsTo('App\Models\SchoolClass', 'class_id');
    }

    public function class()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id');
    }
}
