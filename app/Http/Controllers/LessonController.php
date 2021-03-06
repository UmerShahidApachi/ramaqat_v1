<?php

namespace App\Http\Controllers;

use App\Lesson; 
use App\Section;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $data = Lesson::where('course_id', $id)->get();
        return view('backend.trainer.courses.lessons.home', compact('data', 'id'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
//        dd($request->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "<pre>"; print_r($request->all()); exit();
        $course = Course::find($request->course_id);
        if ($request->hasfile('document')) {
            $postData = $request->only('document');

            $file = $postData['document'];

            $fileArray = array('document' => $file);

            // Tell the validator that this file should be an image
            $rules = array(//                'document' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
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
            $destinationpath = public_path('course/' . $course->name . '/');
            $file->move($destinationpath, $imgname);


        }


//dd($request->hasfile('video'));
        $video = "";
        if ($request->hasfile('video')) {
            $postData = $request->only('video');

            $file = $postData['video'];

            $fileArray = array('video' => $file);

            // Tell the validator that this file should be an image
            $rules = array(//                '
                'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'
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
            $destinationpath = public_path('course/' . $course->name . '/');
            $file->move($destinationpath, $video);
        }
            if(isset($request->video_lock))
            {
               $video_lock = 1; 
            }else{
               $video_lock = 0; 
            }
            // print_r($video_lock); exit();
        if ($request->hasfile('document')) {
            $category = Lesson::create(['course_id' => $request->course_id, 'title' => $request->name, 'lesson_no' => $request->l_num, 'description' => $request->description, 'section_id' => $request->sections, 'video_path' => $video, 'video_lock' => $video_lock, 'extra_document' => $imgname]);
        } else {

            $category = Lesson::create(['course_id' => $request->course_id, 'title' => $request->name, 'lesson_no' => $request->l_num, 'video_lock' => $video_lock, 'description' => $request->description,'section_id' => $request->sections, 'video_path' => $video]);

        }
        $section = Section::with('lessons')->where('course_id',$request->course_id)->get();
        // dd($section);
        // $section = Section::where('course_id',$request->course_id)->get()->toArray();
        // foreach ($section as $key => $value) {
        //     $id= $value['id'];
        //     $check = Lesson::where('section_id',$id)->first();
        //     if(isset($check))
        //     {
        //      $lessons[$id] = $check->toArray();
        //     }
        // }
        // echo "<pre>"; print_r($lessons);exit();
        if ($category) {
           return ['status'=>1, 'lesson'=>$category,'section'=>$section];
        }


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('backend.trainer.courses.lessons.add', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Lesson::find($id);
        $section = Section::where('course_id',$data->course_id)->get();
        // return view('backend.trainer.courses.lessons.edit', compact('data'));
        return ['status'=>1, 'lesson'=>$data, 'data'=>$section];
    }

    public function delete($id)
    {
        $data = Lesson::find($id)->delete();
        return ['status'=>1, 'data'=>$id];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lesson $lesson)
    {

        // dd($request->all());exit();
        $course = Course::find($request->course_id);
        $lesson = Lesson::where('id',$request->id)->first();
        if ($request->hasfile('document')) {
            $postData = $request->only('document');

            $file = $postData['document'];

            $fileArray = array('document' => $file);

            // Tell the validator that this file should be an image
            $rules = array(//                'document' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
            );

            // Now pass the input and rules into the validator
            $validator = Validator::make($fileArray, $rules);


            // Check to see if validation fails or passes
            // if ($validator->fails()) {
            //     return redirect()->back()->with('alert', 'Upload Image only')->withInput();
            // }
            $file = $request->file('document');
            $filename = str_replace(' ', '', $file->getClientOriginalName());
            $ext = $file->getClientOriginalExtension();
            $imgname = uniqid() . $filename;
            $destinationpath = public_path('course/' . $course->name . '/');
            $file->move($destinationpath, $imgname);


        }


//dd($request->file('video'));
        $video = "";
        if ($request->hasfile('video')) {
            $postData = $request->only('video');

            $file = $postData['video'];

            $fileArray = array('video' => $file);

            // Tell the validator that this file should be an image
            $rules = array(//                '
                'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'
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
            $destinationpath = public_path('course/' . $course->name . '/');
            $file->move($destinationpath, $video);
        }else{
            $video = $lesson->video_path;
        }
        if ($request->hasfile('document')) {

            $category = Lesson::where('id',$request->id)->update(['course_id' => $request->course_id, 'title' => $request->name, 'lesson_no' => $request->l_num, 'description' => $request->description, 'video_path' => $video, 'extra_document' => $imgname]);
        } else {

            $category = Lesson::where('id',$request->id)->update(['course_id' => $request->course_id, 'title' => $request->name, 'lesson_no' => $request->l_num, 'description' => $request->description, 'video_path' => $video]);

        }

        $section = Section::with('lessons')->where('course_id',$request->course_id)->get();
        if ($category) {
           return ['status'=>1, 'lesson'=>$category,'section'=>$section];
        }
        // if ($category) {
        //     return redirect()->back();
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Lesson $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }

    public function add_section(Request $request)
    {
        // echo "<pre>"; print_r($request->all());exit();
        $section = new Section;
        $section->section = $request->section;
        $section->course_id = $request->course_ids;
        $success = $section->save();
        $get_section = $section;
        if($success)
        {
            return ['status'=>1, 'section'=>$get_section];
        }
    }

    public function get_section($id)
    {
        // dd($id);
        $section = Section::where('course_id',$id)->get();
        if($section)
        {
            return ['status'=>1, 'data'=>$section];
        }
    }

    public function get_lesson_section($id)
    {
        // print_r($id);exit();
        $section = Section::with('lessons')->where('course_id',$id)->get();
        return ['status'=>1, 'section'=>$section];

    }

}
