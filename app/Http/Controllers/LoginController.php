<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginCredential;

class LoginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function verify(Request $req){
    	$validate = LoginCredential::where('USERNAME' , $req->USERNAME)
                                   ->where ('PASSWORD', $req->PASSWORD)
                                   ->first();
                                        
        if($validate->USER_TYPE == "GAMER" && $validate->STATUS == "ACTIVE"){
            $req->session()->put('loggedUser', $req->USERNAME);
            return redirect()->route('gamer.index');
        }
        else if($validate->USER_TYPE == "DEVELOPER" && $validate->STATUS == "ACTIVE"){
            $req->session()->put('loggedUser', $req->USERNAME);
            return redirect()->route('developer.index');
        }
        else if($validate->USER_TYPE == "MODERATOR" && $validate->STATUS == "ACTIVE"){
            //
        } 
        else{
            return view('login.index');
        }
    }
    
}
