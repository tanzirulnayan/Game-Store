<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use File;
use DateTime;
use App\Gamer;
use App\Developer;
use App\LoginCredential;
use App\Abuse_Report;
use App\Game;
use App\GameType;

class GamerController extends Controller
{
    public function index(){
        $data = Gamer::where("USERNAME", session("loggedUser"))->first();
        $game = DB::table('games')
        ->select('games.GAME_ID','games.GAME_NAME', 'games.GAME_LOGO','upload_history.USERNAME')
        ->join('upload_history','upload_history.GAME_ID','=','games.GAME_ID')
        ->get();
        return view('gamer.index')->with("data", $data)->with("game", $game);
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

    public function reportAbuse(){
        $data = Gamer::find(session("loggedUser"));
        return view('gamer.reportAbuse')->with("data", $data);
    }

    public function saveReportAbuse(Request $req){
        $gamer              = Gamer::find(session("loggedUser"));
        $report             = new Abuse_Report;
        $report->AR_ID ;
        $report->USERNAME   = $gamer->USERNAME;
        $report->AR_TEXT    = $req->AR_TEXT;
        $date = new DateTime();
        $report->DATE       = $date->format('Y-m-d H:i:s');
        $report->save(); 
        return redirect()->route('gamer.index'); 
    }

    public function viewGame($gameId){
        $data = Gamer::find(session("loggedUser"));
        $game = Game::find($gameId);
        $type = GameType::where("TYPE_ID", $game->TYPE_ID)->first();
        return view('gamer.viewGame')->with("game", $game)
                                     ->with("data", $data)
                                     ->with("type", $type);
    }

    public function viewDeveloper($devId){
        $data = Gamer::find(session("loggedUser"));
        $dev = Developer::find($devId);
        return view('gamer.viewDeveloper')->with("dev", $dev)
                                     ->with("data", $data);
    }
}