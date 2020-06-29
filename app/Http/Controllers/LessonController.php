<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $data = Lesson::where('course_id',$id)->get();
        return view('backend.trainer.courses.lessons.home', compact('data','id'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request  $request)
    {
        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = Course::find($request->course_id);
        if ($request->hasfile('document')) {
            $postData = $request->only('document');

            $file = $postData['document'];

            $fileArray = array('document' => $file);

            // Tell the validator that this file should be an image
            $rules = array(
//                'document' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
            );

            // Now pass the input and rules into the validator
            $validator = Validator::make($fileArray, $rules);


            // Check to see if validation fails or passes
            if ($validator->fails()) {
                return redirect()->back()->with('alert', 'Upload Image only')->withInput();
            }
            $file = $request->file('document');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $ext = $file->getClientOriginalExtension();
            $imgname = uniqid() . $filename;
            $destinationpath = public_path('course/'.$course->name.'/');
            $file->move($destinationpath, $imgname);


        }



        if ($request->hasfile('video')) {
            $postData = $request->only('video');

            $file = $postData['video'];

            $fileArray = array('video' => $file);

            // Tell the validator that this file should be an image
            $rules = array(
//                'document' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
            );

            // Now pass the input and rules into the validator
            $validator = Validator::make($fileArray, $rules);


            // Check to see if validation fails or passes
            if ($validator->fails()) {
                return redirect()->back()->with('alert', 'Upload video only')->withInput();
            }
            $file = $request->file('video');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $ext = $file->getClientOriginalExtension();
            $video = uniqid() . $filename;
            $destinationpath = public_path('course/'.$course->name.'/');
            $file->move($destinationpath, $video);


        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('backend.trainer.courses.lessons.add',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
