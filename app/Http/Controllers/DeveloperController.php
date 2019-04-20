<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Developer;

class DeveloperController extends Controller
{
    public function index(){

        $data = Developer::where("USERNAME", session("loggedUser"))->first();
        return view('developer.index')->with("data", $data);   
    }
    public function viewProfile(){

        $data = Developer::find(session("loggedUser"));
        return view('developer.viewProfile')->with("data", $data);   
    }
    public function editProfile(){

        $data = Developer::find(session("loggedUser"));
        return view('developer.editProfile')->with("data", $data); 
    }
    public function editProfileToDB(Request $req){
        $update = Developer::find(session("loggedUser"));
        $update->DEV_NAME             = $req->DEV_NAME;
        $update->DEV_DESCRIPTION      = $req->DEV_DESCRIPTION;
        $update->DEV_ADDRESS          = $req->DEV_ADDRESS;
        $update->DEV_EMAIL            = $req->DEV_EMAIL;
        $update->DEV_WEBSITE          = $req->DEV_WEBSITE;
        $update->DEV_CREDIT_CARD      = $req->DEV_CREDIT_CARD;
        $update->save(); 
        return redirect()->route('developer.viewProfile'); 
    }
    public function changePicture(Request $req){

        $data = Developer::find(session("loggedUser"));
        return view('developer.changePicture')->with("data", $data); 
    }
    public function changePassword(Request $req){

        $data = Developer::find(session("loggedUser"));
        return view('developer.changePassword')->with("data", $data); 
    }









    
}
