<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Setting::where('id',1)->first();
        return view('backend.admin.settings.home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {

        // dd($request->all());
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
            $destinationpath = public_path('setting');
            $file->move($destinationpath, $imgname);
        }
        if ($request->hasfile('image2')) {
            $postData = $request->only('image2');

            $file = $postData['image2'];

            $fileArray = array('image2' => $file);

            // Tell the validator that this file should be an image
            $rules = array(
                'image2' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
            );

            // Now pass the input and rules into the validator
            $validator = Validator::make($fileArray, $rules);


            // Check to see if validation fails or passes
            if ($validator->fails()) {
                return redirect()->back()->with('alert', 'Upload Image only')->withInput();
            }
            $file = $request->file('image2');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $ext = $file->getClientOriginalExtension();
            $imgname2 = uniqid() . $filename;
            $destinationpath = public_path('setting');
            $file->move($destinationpath, $imgname2);
        }
//        dd($imgname);


        $category = Setting::where('id',1)->update([
            'about_us_description'=>$request->description,
            'contact_us_description'=>$request->contact_desc,
            'fb_link'=>$request->fb_link,
            'insta_link'=>$request->insta_link,
            'twitter_link'=>$request->twitter_link,
            'in_link'=>$request->in_link,
            'about_us_image'=>$imgname,
            'contact_us_image'=>$imgname2,
            'contact_phone'=>$request->phone,
            'contact_address'=>$request->address,
            'contact_city'=>$request->location,
            'contact_email'=>$request->email,
            ]);

        if ($category){
            return redirect()->back();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
