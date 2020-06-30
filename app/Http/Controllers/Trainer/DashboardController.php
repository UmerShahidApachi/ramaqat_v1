<?php

namespace App\Http\Controllers\Trainer;

use App\CourseSale;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('backend.trainer.dashboard.home');
    }
    public function courses(){
        $data = Course::where('user_id',Auth::id())->get();
        $categories = Category::all();
        return view('backend.trainer.courses.home', compact('data','categories'));

    }
    public function sell_courses(){
        $data = CourseSale::where('sell_by',Auth::id())->get();
        return view('backend.trainer.courses.sales', compact('data'));

    }
}
