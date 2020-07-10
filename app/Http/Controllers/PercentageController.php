<?php

namespace App\Http\Controllers;

use App\Percentage;
use Illuminate\Http\Request;

class PercentageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Percentage::where('id',1)->first();
        return view('backend.admin.percentages.home', compact('data'));
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
     * @param  \App\Percentage  $percentage
     * @return \Illuminate\Http\Response
     */
    public function show(Percentage $percentage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Percentage  $percentage
     * @return \Illuminate\Http\Response
     */
    public function edit(Percentage $percentage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Percentage  $percentage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Percentage $percentage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Percentage  $percentage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Percentage $percentage)
    {
        //
    }
}
