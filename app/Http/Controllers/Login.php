<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Session;

class Login extends Controller
{
	public function login(){
    	return view('login');
    }

    public function loginsubmit(Request $req){
    	$req->validate([
    			'email' => 'required|email',
    			'password' => 'required',
    	]);

    	$user = Users::where('email', $req->email)->first();
		if(!$user || !Hash::check($req->password, $user->password)){
			$req->session()->put('fail','PLease enter correct username and password!');
    		return redirect('/login');
    	}else{
    		$req->session()->put('logData',[$req->input()]);
    		return redirect('/listbrands');
    	}	
    }

    public function logout(Request $request){
    	$request->session()->forget('logData');
    	$request->session()->forget('success');
    	$request->session()->forget('fail');
    	return redirect('/login');
    }
}
