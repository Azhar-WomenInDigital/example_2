<?php

namespace App\Models;

use App\Models\Course;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function course_category()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        $this->hasMany(User::class);
    }
}