<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\User;

class AuthController extends Controller
{

	  public function index(Request $request, User $user) {
      $user = User::orderBy('id', 'desc')->paginate(4);
      return $user->all();
  } 

    public function register(Request $request) 
   {
       $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6'
       ]); 

       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password)
       ]);

       $user->save();
       return response()->json([
       	'status' => 'success',
       	'message' => 'user success register'
       ], 200);
   }
   

   
   public function login(Request $request)
   {
        $request->validate([
            'email' => 'required',
            'password' => 'required|string'
        ]);

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();

        return response()->json(['data' =>[
            'user' => Auth::user(),
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
        ]]);

        // return user()->all();
   }

   public function detail($id)
   {
   	$user = User::find($id);
   		
   	if (!$user) {
   		return response()->json(['message' => 'User not found'], 404);
   	}

   	return $user;
   }

   public function update(Request $request, User $user, $id)
   {
   	$user = User::find($id);
   	
   	if (!$user) {
   		return response()->json(['message' => 'User not found'], 404);
   	}
   	$user->name = $request->get('name', $user->name);
   	$user->email = $request->get('email', $user->email);
   	$user->password = $request->get('password', $user->password);
   	$user->save();

   	return response()->json(['message' => 'User has been update'], 200);

   }
  
  public function destroy($id) {
    $user = User::find($id);

    if (!$user) {

       	return response()->json(['message' => 'user not found'], 404);
    }
    $user->delete();

    return response()->json(['message' => 'User has been delete'], 200);
 	
  }
}
