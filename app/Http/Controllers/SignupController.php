<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamer;
use App\Developer;
use App\LoginCredential;
use App\Country;
use App\Moderator;

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

        return view('login.index');          
    }


/**************************** MODERATOR ****************************/

public function moderator(){
    return view('signup.moderator');
}

public function moderatorToBD(Request $req){

    $file = $req->file('MOD_IMAGE');
    $name = "profilePicture_" . uniqid() . "." . $file->getClientOriginalExtension();
    $file->move('Image_Folder', $name);

    $moderator = new Moderator;
    $moderator->USERNAME         = $req->USERNAME;
    $moderator->MOD_NAME           = $req->MOD_NAME;
    $moderator->MOD_EMAIL          = $req->MOD_EMAIL;
    $moderator->MOD_ADDRESS         = $req->MOD_ADDRESS;
    $moderator->MOD_DOB            = $req->MOD_DOB;
    $moderator->MOD_IMAGE          = "Image_Folder/" . $name;
    $moderator->save();  

    $loginModerator               = new LoginCredential();
    $loginModerator->USERNAME       = $req->USERNAME;
    $loginModerator->PASSWORD       = $req->PASSWORD;
    $loginModerator->USER_TYPE      = "MODERATOR";
    $loginModerator->STATUS         = "PENDING";
    $loginModerator->save();  

    return view('login.index');          
}













}
