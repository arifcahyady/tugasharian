<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getLogin(){
    return view('auth.login');
  }

  public function postLogin(Request $request){
  	return redirect('/home');
  }

   public function getRegister(){
    return view('auth.register');
  }


  public function postRegister(Request $request){
  	
  	$this->validate ($request, [
  		'name' => 'required|min:4',
  		'email' => 'required|email|unique:users',
  		'password' => 'required|min:6|'
  	]);

  	User::create([
  		'name' => $request->name,
  		'email' => $request->email,
  		'password' => bcrypt($request->password)
  	]);

  	return redirect('/login');
  }
}
