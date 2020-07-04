<?php


namespace App\Http\Controllers\Backend;


use App\CourseSale;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Slider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function change_course_status(Request $request)
    {
//        dd($request->all());

        $id=$request->id;
        $club=Course::find($id);
        $club->status=$request->status;
        $club->save();
    }

    public function dashboard(){
        return view('backend.admin.dashboard.home');
    }
    public function all_users(){
        $data = User::where('role_id',3)->get();
        return view('backend.admin.users.home', compact('data'));

    }

    public function accounts(){
        $data = "";
        return view('backend.admin.accounts.home', compact('data'));

    }
    public function courses(){
        $data = Course::all();
        return view('backend.admin.courses.home', compact('data'));

    }
    public function all_trainers(){
        $data = User::where('is_trainer',1)->get();
        return view('backend.admin.trainers.home', compact('data'));

    }
    public function slider(){
       $data =  Slider::all();
        return view('backend.admin.slider.slider', compact('data'));

    }

    public function sell_courses(){
        $data = CourseSale::all();
        return view('backend.admin.courses.sales', compact('data'));

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

    public function edit_slider(Request $request){
        $slider = Slider::find($request->id);
        return response()->json(['status' => 'success', 'data'=>$slider ]);
    }
    public function update_slider(Request $request){
        $slider = Slider::find($request->id);
        if($request->hasfile('image')){

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
            if ($validator->fails())
            {
                return redirect()->back()->with('alert','Upload Image only')->withInput();
            }

            $destinationpath=public_path("slider/".$slider->image);
            File::delete($destinationpath);
            $file=$request->file('image');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $ext=$file->getClientOriginalExtension();
            $imgname=uniqid().$filename;
            $destinationpath=public_path('slider');
            $file->move($destinationpath,$imgname);
        }else{
            $imgname=$slider->image;

        }
        $check = Slider::where('id',$request->id)->update(['title'=>$request->heading,'heading'=>$request->sub_heading,'image'=>$imgname]);
            if ($check){
                return redirect()->back();
            }
    }
    public function delete_slider(Request $request){
        Slider::where('id',$request->id)->delete();


    }


    public function categories(){
//        dd('sda');
        $data = Category::all();
        return view('backend.admin.category.category', compact('data'));

    }
}
