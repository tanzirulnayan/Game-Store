<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Developer;

class DeveloperController extends Controller
{
    public function index(Request $req){

        $data = Developer::where("USERNAME", session("loggedUser"))->first();
        return view('developer.index')->with("data", $data);
         
    }
    public function viewProfile(Request $req){

        $data = Developer::find(session("loggedUser"));
        return view('developer.viewProfile')->with("data", $data);
         
    }









    
}
