<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
	protected $table = 'classes';

	protected $fillable = [
		'name', 'description'
	];

    public function students()
    {
        return $this->hasMany('App\Models\Student');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher', 'teacher_id');
    }
}
