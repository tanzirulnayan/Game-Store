<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $req){
    	
    	$req->session()->forget('loggedUser');

    	return redirect()->route('login.index');
    }
}
