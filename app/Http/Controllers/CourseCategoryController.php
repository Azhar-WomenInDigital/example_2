<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public function index()
    {
        return \view('course-category.course_cat_index');
    }

    public function courseCategory($id)
    {
        $course_cat = CourseCategory::findOrFail($id);
        $course = Course::where('category_id', $id)->latest()->get();
        return view('course', compact('course_cat', 'course'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
        ]);
        $cat = new CourseCategory();
        $cat->category_name = $request->category_name;
        $cat->save();
        return \redirect()->back();
    }
}