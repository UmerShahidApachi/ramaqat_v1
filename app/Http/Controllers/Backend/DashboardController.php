<?php


namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard(){
        return view('backend.admin.dashboard.dashboard');
    }
    public function all_users(){
        return view('backend.admin.users.home');

    }
}
