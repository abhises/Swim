<?php

namespace App\Http\Controllers;

use App\Http\Resources\SwimmingpoolResource;
use App\Swimmingpool;
use Illuminate\Http\Request;

class SwimmingpoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $swimmingpool=Swimmingpool::all();
        return SwimmingpoolResource::collection($swimmingpool);
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
        
       $swimmingpool=Swimmingpool::create([
        'name'=>$request->name,
        'location'=>$request->location,
        'length'=>$request->length,
        'type'=>$request->type
       ]);

        return new SwimmingpoolResource($swimmingpool);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Swimmingpool  $swimmingpool
     * @return \Illuminate\Http\Response
     */
    public function show(Swimmingpool $swimmingpool)
    {
        return new SwimmingpoolResource($swimmingpool);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Swimmingpool  $swimmingpool
     * @return \Illuminate\Http\Response
     */
    public function edit(Swimmingpool $swimmingpool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Swimmingpool  $swimmingpool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Swimmingpool $swimmingpool)
    {
         $swimmingpool->update($request->only(['name', 'location','length','type']));
        return new SwimmingpoolResource($swimmingpool);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Swimmingpool  $swimmingpool
     * @return \Illuminate\Http\Response
     */
    public function destroy(Swimmingpool $swimmingpool)
    {
         $swimmingpool->delete();
        return response()->json(null,200);
    }
}
