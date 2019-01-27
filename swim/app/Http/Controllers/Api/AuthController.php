<?php

namespace App\Http\Controllers\Api;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
    	$validator=Validator::make($request->all(),[
    		'name'=>'required|max:200|min:4',
    		'email'=>'required|email',
    		'password'=>'required'
    	]);
    	if($validator->fails()){
    		return response()->json(['error'=>$validator->errors()],401);
    	}
    	$input=$request->all();
    	$input['password']=bcrypt($input['password']);
    	$user=User::create($input);
    	$success['token']=$user->createtoken('Myapp')->accessToken;
    	$success['name']=$user->name;
    	$success['email']=$user->email;
    	$success['password']=$user->password;
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
         $user = Auth::guard('api')->user();

            if ($user) {
             $user->api_token = null;
             $user->save();
            }

            return response()->json(['data' => 'User logged out.'], 200);
      }
}
