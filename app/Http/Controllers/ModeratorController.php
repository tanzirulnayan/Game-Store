<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moderator;
use App\LoginCredential;

class ModeratorController extends Controller
{
    public function index(){
        $data = Moderator::where("USERNAME", session("loggedUser"))->first();
        return view('moderator.index')->with("data", $data);
    }


    public function viewProfile(){

        $data = Moderator::find(session("loggedUser"));
        return view('moderator.viewProfile')->with("data", $data);   
    }

    public function editProfile(){

        $data = Moderator::find(session("loggedUser"));
        return view('moderator.editProfile')->with("data", $data); 
    }
    public function editProfileToDB(Request $req){
        $update                       = Moderator::find(session("loggedUser"));
        $update->MOD_NAME             = $req->MOD_NAME;
        $update->MOD_ADDRESS          = $req->MOD_ADDRESS;
        $update->MOD_EMAIL            = $req->MOD_EMAIL;
        $update->MOD_DOB              = $req->MOD_DOB;
        $update->save(); 
        return redirect()->route('moderator.viewProfile'); 
    }
    public function changePicture(){
        $data = Moderator::find(session("loggedUser"));
        return view('moderator.changePicture')->with("data", $data); 
    }
    public function changePictureToDB(Request $req){
       
        $file = $req->file('MOD_IMAGE');
        $name = "mod_image_" . uniqid() . "." . $file->getClientOriginalExtension();
        $file->move('Image_Folder', $name);

        $changePicture                = Moderator::find(session("loggedUser"));
        $changePicture->MOD_IMAGE     = "Image_Folder/" . $name;
        $changePicture->save();
        return redirect()->route('moderator.viewProfile');
    }
    public function changePassword(){
        $data = Moderator::find(session("loggedUser"));
        return view('moderator.changePassword')->with("data", $data); 
    }
    public function changePasswordToDB(Request $req){
        $changePassword = LoginCredential::find(session("loggedUser"));

        if($req->OLD_PASSWORD == $changePassword->PASSWORD){
            $changePassword->PASSWORD = $req->CONFIRM_PASSWORD;
            $changePassword->save();
            return redirect()->route('logout.index');
        }
    }

}
