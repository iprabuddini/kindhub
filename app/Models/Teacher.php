<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
    public function classes()
    {
        return $this->belongsTo('App\Models\Class', 'class_id');
    }
}
