<?php

namespace App\Http\Controllers;


use App\Http\Resources\SwimmerResource;
use App\Swimmer;
use Illuminate\Http\Request;

class SwimmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $swimmers= Swimmer::all();
       return SwimmerResource::collection($swimmers);
        

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
        $this->validate($request,[
            'target_time_id'=>'required',
            'photo'=>'image|max:4999'

        ]);

        $fileNameWithExt=$request->file('photo')->getClientOriginalName();

        $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        // get extension
        $extension=$request->file('photo')->getClientOriginalExtension();
        // create new file name
        $fileNameTOStore=$filename.'_'.time().'.'.$extension;
        //upload Image
        $path=$request->file('photo')->storeAs('public/photos', $fileNameTOStore);

        $swimmer=Swimmer::create([
            'target_time_id'=>$request->target_time_id,
            'firstname' =>$request->firstname,
            'middlename'=>$request->middlename,
            'lastname'=>$request->lastname,
            'nickname'=>$request->nickname,
            'uniquename'=>$request->uniquename,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'city_of_birth'=>$request->city_of_birth,
            'school'=>$request->school,
            'date_of_joined'=>$request->date_of_joined,
            'photo'=>$fileNameTOStore,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,
            'height'=>$request->height,
            'weight'=>$request->weight,
            'rest_hr'=>$request->rest_hr,
            'max_hr'=>$request->max_hr,
            'skin_fold'=>$request->skin_fold,
            'distance'=>$request->distance,
            'stroke'=>$request->stroke,
            'main'=>$request->main
        ]);
        return new SwimmerResource($swimmer);
        return response()->json([
            'message'=>'Swimmer Profile created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Swimmer  $swimmer
     * @return \Illuminate\Http\Response
     */
    public function show(Swimmer $swimmer)
    {
            return new SwimmerResource($swimmer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Swimmer  $swimmer
     * @return \Illuminate\Http\Response
     */
    public function edit(Swimmer $swimmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Swimmer  $swimmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Swimmer $swimmer)
    {
        $swimmer->update($request->only(['target_time_id','firstname','middlename','lastname','nickname','uniquename','dob','gender','city_of_birth','school','date_of_joined','photo','country','state','city','father_name','mother_name','height','weight','rest_hr','max_hr','skin_fold','distance','stroke','main']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Swimmer  $swimmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Swimmer $swimmer)
    {
        if ($swimmer ==null) {
            return response()->json(['messsage'=>'no data']);
        }
        $swimmer->delete();
        return response()->json(null,200);
    }
}
