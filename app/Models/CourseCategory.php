<?php

namespace App\Models;

use App\Models\CourseCategory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    public function course()
    {
        return $this->hasMany(CourseCategory::class);
    }
}