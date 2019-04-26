<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moderator;
class ModeratorController extends Controller
{
    public function index(){
        $data = Moderator::where("USERNAME", session("loggedUser"))->first();
        return view('moderator.index')->with("data", $data);
    }
}
