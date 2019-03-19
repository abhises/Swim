<?php

namespace App\Http\Controllers;

use App\Http\Resources\TargettimeResource;
use App\Target_time;
use Illuminate\Http\Request;

class TargetTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $target_time=Target_time::all();
        return TargettimeResource::collection($target_time);
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
        $request->validate([
            'time'=>'required'
        ]);
        $target_time=Target_time::create([
            'time'=>$request->time
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Target_time  $target_time
     * @return \Illuminate\Http\Response
     */
    public function show(Target_time $target_time)
    {
        return new TargettimeResource($target_time);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Target_time  $target_time
     * @return \Illuminate\Http\Response
     */
    public function edit(Target_time $target_time)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Target_time  $target_time
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Target_time $target_time)
    {
        $target_time->update($request->only(['time']));
        return new TargettimeResource($target_time);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Target_time  $target_time
     * @return \Illuminate\Http\Response
     */
    public function destroy(Target_time $target_time)
    {
        if ($target_time ==null) {
            return response()->json('message'=>'no data');
        }
        $target_time->delete();
        return response()->json(null,200);
    }
}
