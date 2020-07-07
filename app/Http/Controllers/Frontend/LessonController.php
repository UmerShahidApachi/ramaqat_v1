<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Lesson;
use App\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{

	public function index($id)
	{
		$lesson = Lesson::find($id);
		$course = Course::find($lesson->course_id);
		$trainer = User::find($course->user_id);
		// echo "<pre>"; print_r($lesson); exit;
		 return view('course.completeCourse', compact('lesson','course','trainer'));
	}




}