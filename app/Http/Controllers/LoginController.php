<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginCredential;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(LoginRequest $req){


    	$check = LoginCredential::where('USERNAME' , $req->USERNAME)
                                   ->where ('PASSWORD', $req->PASSWORD)
                                   ->first();
                                        
        if($check->USER_TYPE == "GAMER" && $check->STATUS == "ACTIVE"){
            $req->session()->put('loggedUser', $req->USERNAME);
            return redirect()->route('gamer.index');
        }
        else if($check->USER_TYPE == "DEVELOPER" && $check->STATUS == "ACTIVE"){
            $req->session()->put('loggedUser', $req->USERNAME);
            return redirect()->route('developer.index');
        }
        else if($check->USER_TYPE == "MODERATOR" && $check->STATUS == "ACTIVE"){
            $req->session()->put('loggedUser', $req->USERNAME);
            return redirect()->route('moderator.index');
        } 
        else{
            return view('login.index');
        }
    }
}