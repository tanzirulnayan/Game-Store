<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamer;
use App\LoginCredential;

class GamerController extends Controller
{
    public function index(){
        $data = Gamer::where("USERNAME", session("loggedUser"))->first();
        return view('gamer.index')->with("data", $data);
    }

    public function viewProfile(){
        $data = Gamer::where("USERNAME", session("loggedUser"))->first();
        return view('gamer.profile')->with("data", $data);
    }
    
    public function editProfile(){
        $data = Gamer::where("USERNAME", session("loggedUser"))->first();
        return view('gamer.editProfile')->with("data", $data);
    }

    public function updateProfile(Request $req){
        $update             = Gamer::find(session("loggedUser"));
        $update->G_NAME     = $req->G_NAME;
        $update->G_EMAIL    = $req->G_EMAIL;
        $update->G_MOBILE   = $req->G_MOBILE;
        $update->G_DOB      = $req->G_DOB;
        $update->save(); 
        return redirect()->route('gamer.ViewProfile'); 
    }

    public function changePicture(){
        $data = Gamer::find(session("loggedUser"));
        return view('gamer.changePicture')->with("data", $data); 
    }

    public function updatePicture(Request $req){
        $file = $req->file('G_IMAGE');
        $name = "GamerPicture_" . uniqid() . "." . $file->getClientOriginalExtension();
        $file->move('Image_Folder', $name);

        $changePicture                = Gamer::find(session("loggedUser"));
        $changePicture->G_IMAGE      = "Image_Folder/" . $name;
        $changePicture->save();
        return redirect()->route('gamer.ViewProfile');
    }

    public function changePassword(){
        $data = Gamer::find(session("loggedUser"));
        return view('gamer.changePassword')->with("data", $data); 
    }

    public function updatePassword(Request $req){
        $changePassword = LoginCredential::find(session("loggedUser"));

        if($req->old_password == $changePassword->PASSWORD){
            if($req->new_password == $req->con_password){
                $changePassword->PASSWORD = $req->new_password;
                $changePassword->save();
                return redirect()->route('gamer.index');
            }
            else{
                return redirect()->route('gamer.ChangePassword');
            }
        }
        else{
            return redirect()->route('gamer.ChangePassword');
        }
    }

    public function reportAbuse(Request $req){
        $data = Gamer::find(session("loggedUser"));
        return view('gamer.reportAbuse')->with("data", $data);
    }
}