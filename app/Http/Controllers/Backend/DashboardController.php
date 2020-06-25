<?php


namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard(){
        return view('backend.admin.dashboard.home');
    }
    public function all_users(){
        return view('backend.admin.users.home');

    }
    public function slider(){
       $data =  Slider::all();
        return view('backend.admin.slider.slider', compact('data'));

    }
    public function sliderdata(Request $request){
//        dd($request->all());

        if ($request->hasfile('image')) {
            $postData = $request->only('image');

            $file = $postData['image'];

            $fileArray = array('image' => $file);

            // Tell the validator that this file should be an image
            $rules = array(
                'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
            );

            // Now pass the input and rules into the validator
            $validator = Validator::make($fileArray, $rules);


            // Check to see if validation fails or passes
            if ($validator->fails()) {
                return redirect()->back()->with('alert', 'Upload Image only')->withInput();
            }
            $file = $request->file('image');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $ext = $file->getClientOriginalExtension();
            $imgname = uniqid() . $filename;
            $destinationpath = public_path('slider');
            $file->move($destinationpath, $imgname);
        }
//        dd($imgname);

        $category = Slider::create(['title'=>$request->heading,'heading'=>$request->sub_heading,'image'=>$imgname]);

        if ($category){
            return redirect()->back();
        }
    }
    public function categories(){
        $data = Category::all();
        return view('backend.admin.category.category', compact('data'));

    }
}
