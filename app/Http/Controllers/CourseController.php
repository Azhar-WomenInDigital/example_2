<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $course_cat = CourseCategory::all();
        return view('course.course_index', \compact('course_cat'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'subject_name' => 'required',
        ]);

        $sub = new Course();
        $sub->category_id = $request->category_id;
        $sub->subject_name = $request->subject_name;
        $sub->save();
        return \redirect()->back();
    }

    public function userSubjectUpdate(Request $request)
    {
        $this->validate($request, [
            'subject_id' => 'required',
        ]);

        $user = User::findOrFail(Auth::id());
        $user->subject_id = $request->subject_id;
        $user->save();
        return \redirect()->back();

    }

}