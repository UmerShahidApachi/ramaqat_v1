<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rating;
use Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }public function homePage()
    {
        return view('home.frontend.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function gaveRating(Request $request)
    {
        // echo "<pre>"; print_r($request->all());exit;
        if($request->rating==0)
        {
            return ['status'=>0, 'message'=>'You forgot to select Course Rating'];
        }
        if(isset($request->trainer_rating))
        {
            if($request->trainer_rating==0)
            {
                return ['status'=>0, 'message'=>'You forgot to select Trainer Rating'];
            }
            $rate = new Rating;
            $rate->user_id = Auth::user()->id;
            $rate->rating = $request->trainer_rating; 
            $rate->type = 2;
            $rate->commit = $request->message; 
            $rate->course_id = $request->course_id;
            $rate->trainer_id = $request->trainer_id;  
            $success = $rate->save();
        }
        $rate = new Rating;
        $rate->user_id = Auth::user()->id;
        $rate->rating = $request->rating; 
        $rate->type = 1;
        $rate->commit = $request->message; 
        $rate->course_id = $request->course_id; 
        $success = $rate->save();
        if($success)
        {
            return ['status'=>1, 'message'=>'Rating Added Successfully'];
        }else{
            return ['status'=>0, 'message'=>'There is some issue'];
        }
    }
}
