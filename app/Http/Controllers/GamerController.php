<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamer;

class GamerController extends Controller
{
    public function index(){
        $data = Gamer::where("USERNAME", session("loggedUser"))->first();
        return view('gamer.index')->with("data", $data);
    }












    
}
