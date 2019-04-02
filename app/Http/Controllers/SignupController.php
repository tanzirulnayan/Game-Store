<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
/****************** Index ******************/    
    public function index(){
    	return view('signup.index');
    }
/****************** Gamer ******************/
    public function gamer(){
    	return view('signup.gamer');
    }
}
