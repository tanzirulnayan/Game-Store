<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use File;
use DateTime;
use App\Gamer;
use App\Developer;
use App\LoginCredential;
use App\Abuse_Report;
use App\Game;
use App\GameType;
use App\Forum_Comment;
use App\Http\Requests\GamerRequest;
use App\Http\Requests\GamerChangePasswordRequest;
use App\Http\Requests\GamerChangePictureRequest;

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

    public function updateProfile(GamerRequest $req){
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

    public function updatePicture(GamerChangePictureRequest $req){
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

    public function updatePassword(GamerChangePasswordRequest $req){
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
        $report->AR_ID;
        $report->USERNAME   = $gamer->USERNAME;
        $report->AR_TEXT    = $req->AR_TEXT;
        $date = new DateTime();
        $report->DATE       = $date->format('Y-m-d H:i:s');
        $report->save(); 
        return redirect()->route('gamer.index'); 
    }

    public function viewGame($gameId){
        $data       = Gamer::find(session("loggedUser"));
        $game       = Game::find($gameId);
        $comment    = DB::table('forum_comments')
                                ->select('forum_comments.USERNAME','forum_comments.COMMENT', 'gamers.G_IMAGE')
                                ->join('gamers','gamers.USERNAME','=','forum_comments.USERNAME')
                                ->where(['GAME_ID' => $gameId])
                                ->get();

        $type       = GameType::where("TYPE_ID", $game->TYPE_ID)->first();
        return view('gamer.viewGame')->with("game", $game)
                                     ->with("data", $data)
                                     ->with("type", $type)
                                     ->with("comment", $comment);
    }
    
    public function viewDeveloper($devId){
        $data = Gamer::find(session("loggedUser"));
        $dev = Developer::find($devId);
        return view('gamer.viewDeveloper')->with("dev", $dev)
                                     ->with("data", $data);
    }

    public function saveComment(Request $req, $gameId){
        $date = new DateTime();
        $gamer = Gamer::find(session("loggedUser"));
        $comment = new Forum_Comment;
        $comment->C_ID;
        $comment->GAME_ID   = $gameId;
        $comment->COMMENT   = $req->COMMENT;
        $comment->C_TIME    = $date->format('Y-m-d H:i:s');
        $comment->USERNAME  = $gamer->USERNAME;
        $comment->save();
        return redirect()->route('gamer.ViewGame', $gameId); 
    }

    public function statistics(){
        $data       = Gamer::find(session("loggedUser"));
        $gamer      = Gamer::count();
        $developer  = Developer::count();
        $game       = Game::count();
        $user       = $gamer + $developer;
        return view('gamer.statistics') ->with("data", $data)
                                        ->with("gamer", $gamer)
                                        ->with("developer", $developer)
                                        ->with("game", $game)
                                        ->with("user", $user);
    }

    function action(Request $req){

        if($req->search){
            $search = DB::table('games')
                        ->where('GAME_NAME' , 'like' , '%'.$req->search.'%')
                        ->get();
        }

        if($search){
            foreach ($search as $row) {
                echo '<option>'. $row->GAME_NAME . '</option>';
            }
        }
    }

    function actionView(Request $req){
        $game = Game::where("GAME_NAME", "=", $req->search)->first();
        if($game){
            return redirect()->route('gamer.ViewGame' , $game->GAME_ID );      
        }
        else{
            return \Redirect::back()->withError( 'Game Not Found ' );
        }
    }
}