<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamer;
use App\Developer;
use App\LoginCredential;
use App\Country;

class SignupController extends Controller
{
/**************************** Index ****************************/    
    public function index(){
    	return view('signup.index');
    }
/**************************** Gamer ****************************/
    public function gamer(){
    	return view('signup.gamer');
    }

    public function gamerToDB(Request $req){

        $file = $req->file('G_IMAGE');
        $name = "profilePicture_" . uniqid() . "." . $file->getClientOriginalExtension();
        $file->move('Image_Folder', $name);

        $gamer = new Gamer;
        $gamer->USERNAME         = $req->USERNAME;
        $gamer->G_NAME           = $req->G_NAME;
        $gamer->G_EMAIL          = $req->G_EMAIL;
        $gamer->G_MOBILE         = $req->G_MOBILE;
        $gamer->G_DOB            = $req->G_DOB;
        $gamer->G_IMAGE          = "Image_Folder/" . $name;
        $gamer->save();  

        $loginGamer                 = new LoginCredential();
        $loginGamer->USERNAME       = $req->USERNAME;
        $loginGamer->PASSWORD       = $req->PASSWORD;
        $loginGamer->USER_TYPE      = "GAMER";
        $loginGamer->STATUS         = "PENDING";
        $loginGamer->save();  

        return view('login.index');          
    }

/**************************** DEVELOPER ****************************/
    public function developer(){
        return view('signup.developer');
    }

    public function developerToDB(Request $req){

        $file = $req->file('DEV_LOGO');
        $name = "developerLogo_" . uniqid() . "." . $file->getClientOriginalExtension();
        $file->move('Image_Folder', $name);

        $developer = new Developer();
        $developer->USERNAME             = $req->USERNAME;
        $developer->DEV_NAME             = $req->DEV_NAME;
        $developer->DEV_DESCRIPTION      = $req->DEV_DESCRIPTION;
        $developer->DEV_ADDRESS          = $req->DEV_ADDRESS;
        $developer->DEV_EMAIL            = $req->DEV_EMAIL;
        $developer->DEV_WEBSITE          = $req->DEV_WEBSITE;
        $developer->DEV_CREDIT_CARD      = $req->DEV_CREDIT_CARD;
        $developer->DEV_LOGO             = "Image_Folder/" . $name;
        $developer->save();  

        $loginDeveloper                 = new LoginCredential();
        $loginDeveloper->USERNAME       = $req->USERNAME;
        $loginDeveloper->PASSWORD       = $req->PASSWORD;
        $loginDeveloper->USER_TYPE      = "DEVELOPER";
        $loginDeveloper->STATUS         = "PENDING";
        $loginDeveloper->save();  

        return redirect()->route('login.index');         
    }


/**************************** MODERATOR ****************************/














}
