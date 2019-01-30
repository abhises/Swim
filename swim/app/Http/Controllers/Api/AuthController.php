<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Passport\Token;
use Lcobucci\JWT\Parser;



class AuthController extends Controller
{
    public function register(Request $request)
    {
    	$validator=Validator::make($request->all(),[
    		'name'=>'required|max:200|min:4',
    		'email'=>'required|email',
    		'password'=>'required',
            'photo'=>'image|max:4999'
    	]);
    	if($validator->fails()){
    		return response()->json(['error'=>$validator->errors()],401);
    	}
        //get filename with Extension
        $fileNameWithExt=$request->file('photo')->getClientOriginalName();

        $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        // get extension
        $extension=$request->file('photo')->getClientOriginalExtension();
        // create new file name
        $fileNameTOStore=$filename.'_'.time().'.'.$extension;
        //upload Image
        $path=$request->file('photo')->storeAs('public/users', $fileNameTOStore);

    	$input=$request->all();
    	$input['password']=bcrypt($input['password']);
        $input['photo']= $fileNameTOStore;
    	$user=User::create($input);
    	$success['token']=$user->createtoken('Myapp')->accessToken;
    	$success['name']=$user->name;
    	$success['email']=$user->email;
    	$success['password']=$user->password;
        $success['photo']= $fileNameTOStore;
    	$success['created_at']=$user->created_at;
    	return response()->json(['success'=>$success],200);

    }
    public function login (Request $request)
    {
    	$validator=Validator::make($request->all(),[
    		
    		'email'=>'required|email',
    		'password'=>'required'
    	]);
    	if($validator->fails()){
    		return response()->json(['error'=>$validator->errors()],401);
    	}
    		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
    			$user=Auth::user();
    			$success['token']=$user->createToken('MyApp')->accessToken;
    			$success['name']=$user->name;
    			$success['email']=$user->email;
		    	$success['password']=$user->password;
		    	$success['created_at']=$user->created_at;
    			return response()->json(['success'=>$success],200);
    			
    		}else
    		{
    			return response()->json(['error'=>'unauthorised'],401);
    		}
}
      public function logout(Request $request)
      { 
         $request->user()->token()->revoke();
         return response()->json([
        'message' => 'Successfully logged out'
         ]);
     }
}
