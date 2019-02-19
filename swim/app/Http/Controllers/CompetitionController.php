<?php

namespace App\Http\Controllers;

use App\Competition;
use App\Http\Resources\CompetitionResource;
use Illuminate\Http\Request;
use App\Game;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competition=Competition::all();
        return CompetitionResource::collection($competition);
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
            'game_id'=>'required'
        ]);
        $competition=Competition::create([
            'game_id'=>$request->game_id,
            'freestyle_50'=>$request->freestyle_50,
            'freestyle_100'=>$request->freestyle_100,
            'freestyle_200'=>$request->freestyle_200,
            'freestyle_400'=>$request->freestyle_400,
            'freestyle_800'=>$request->freestyle_800,
            'freestyle_1500'=>$request->freestyle_1500,
            'breaststroke_50'=>$request->breaststroke_50,
            'breaststroke_100'=>$request->breaststroke_100,
            'breaststroke_200'=>$request->breaststroke_200,
            'butterfly_50'=>$request->butterfly_50,
            'butterfly_100'=>$request->butterfly_100,
            'butterfly_200'=>$request->butterfly_200,
            'backstroker_50'=>$request->backstroker_50,
            'backstroker_100'=>$request->backstroker_100,
            'backstroker_200'=>$request->backstroker_200,
            'IndMedly_200'=>$request->IndMedly_200,
            'IndMedly_400'=>$request->IndMedly_400
        ]);
        return new CompetitionResource($competition);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function show(Competition $competition)
    {
        return new CompetitionResource($competition);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function edit(Competition $competition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competition $competition)
    {
        $competition->update($request->only(['game_id','freestyle_50','freestyle_100','freestyle_200','freestyle_400','freestyle_800','freestyle_1500','breaststroke_50','breaststroke_100','breaststroke_200','butterfly_50','butterfly_100','butterfly_200','IndMedly_200','IndMedly_400']));
        return new CompetitionResource($competition);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Competition  $competition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
        if ($competition==null) {
            return response()->json(['message'=>'no data']);
        }
        $competition->delete($competition);
        return response()->json(null,200);
    }
}

