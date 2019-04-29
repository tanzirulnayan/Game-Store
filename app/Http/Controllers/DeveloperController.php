<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
USE Illuminate\Filesystem\Filesystem;
use File;
use DateTime;
use App\Developer;
use App\LoginCredential;
use App\Game;
use App\GameType;
use App\UploadHistory;
use App\Advertisement;
use App\HotlineMessage;
use App\Gamer;

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
        $update                       = Developer::find(session("loggedUser"));
        $update->DEV_NAME             = $req->DEV_NAME;
        $update->DEV_DESCRIPTION      = $req->DEV_DESCRIPTION;
        $update->DEV_ADDRESS          = $req->DEV_ADDRESS;
        $update->DEV_EMAIL            = $req->DEV_EMAIL;
        $update->DEV_WEBSITE          = $req->DEV_WEBSITE;
        $update->DEV_CREDIT_CARD      = $req->DEV_CREDIT_CARD;
        $update->save(); 
        return redirect()->route('developer.viewProfile'); 
    }
    public function changePicture(){
        $data = Developer::find(session("loggedUser"));
        return view('developer.changePicture')->with("data", $data); 
    }
    public function changePictureToDB(Request $req){
       
        $file = $req->file('DEV_LOGO');
        $name = "developerLogo_" . uniqid() . "." . $file->getClientOriginalExtension();
        $file->move('Image_Folder', $name);

        $changePicture                = Developer::find(session("loggedUser"));
        $changePicture->DEV_LOGO      = "Image_Folder/" . $name;
        $changePicture->save();
        return redirect()->route('developer.viewProfile');
    }
    public function changePassword(){
        $data = Developer::find(session("loggedUser"));
        return view('developer.changePassword')->with("data", $data); 
    }
    public function changePasswordToDB(Request $req){
        $changePassword = LoginCredential::find(session("loggedUser"));

        if($req->OLD_PASSWORD == $changePassword->PASSWORD){
            $changePassword->PASSWORD = $req->CONFIRM_PASSWORD;
            $changePassword->save();
            return redirect()->route('logout.index');
        }
    }
    public function addGames(){
        $data = Developer::find(session("loggedUser"));
        $list = GameType::all();
        return view('developer.addGames')->with("data", $data) 
                                           ->with("list", $list);
    }

    public function addGamesToDB(Request $req){

        $gameFile       = $req->file('GAME_FILES');
        $unique         = uniqid(); 
        $nameFile       = $req->GAME_NAME . "_FILE_" . $unique . "." . 
                         $gameFile->getClientOriginalExtension();
        $gameFile->move('game_files/'.$req->GAME_NAME, $nameFile);

        $gameLogo       = $req->file('GAME_LOGO');
        $nameLogo       = $req->GAME_NAME . "_LOGO_" . $unique . "." . 
                         $gameLogo->getClientOriginalExtension();
        $gameLogo->move('game_files/'.$req->GAME_NAME, $nameLogo);
       
        $gameSS         = $req->file('GAME_SS');
        $nameSS         = $req->GAME_NAME . "_SS_" . $unique . "." . 
                         $gameSS->getClientOriginalExtension();
        $gameSS->move('game_files/'.$req->GAME_NAME, $nameSS);

        $game = new Game();
        $game->GAME_ID              = session("loggedUser"). '_' .$req->GAME_NAME;
        $game->GAME_NAME            = $req->GAME_NAME;
        $game->TYPE_ID              = $req->type;
        $game->GAME_PRICE           = $req->GAME_PRICE;
        $game->GAME_DESCRIPTION     = $req->GAME_DESCRIPTION;
        $game->GAME_FILES           = "game_files/". $req->GAME_NAME. '/' . $nameFile;
        $game->GAME_REQ_OS          = $req->GAME_REQ_OS;
        $game->GAME_REQ_CPU         = $req->GAME_REQ_CPU;
        $game->GAME_REQ_RAM         = $req->GAME_REQ_RAM;
        $game->GAME_REQ_HDD         = $req->GAME_REQ_HDD;
        $game->GAME_REQ_GPU         = $req->GAME_REQ_GPU;
        $game->GAME_REQ_NETWORK     = $req->GAME_REQ_NETWORK;
        $game->GAME_LOGO            = "game_files/". $req->GAME_NAME. '/' . $nameLogo;
        $game->GAME_SS              = "game_files/". $req->GAME_NAME. '/' . $nameSS;
        $game->GAME_STATUS          = "PENDING";
        $game->save(); 

        $history = new UploadHistory();
        $history->USERNAME          = session("loggedUser");
        $history->GAME_ID           = session("loggedUser"). '_' .$req->GAME_NAME;
        $history->save();
        return redirect()->route('developer.index'); 
    }

    public function allGames(){
        $data = Developer::find(session("loggedUser"));
        $game = DB::table('games')
        ->select('games.GAME_ID','games.GAME_NAME','upload_history.USERNAME')
        ->join('upload_history','upload_history.GAME_ID','=','games.GAME_ID')
        ->where(['USERNAME' => session("loggedUser")])
        ->get();
    
        return view('developer.allGames')->with("data", $data)
                                          ->with("game", $game);
    }

    public function viewGames($gameID){
        $data = Developer::find(session("loggedUser"));
        $game = Game::find($gameID);
        $type = GameType::where("TYPE_ID", $game->TYPE_ID)->first();
        return view('developer.viewGames')->with("game", $game)
                                          ->with("data", $data)
                                          ->with("type", $type);
    }

    public function updateGames($gameID){
        $data = Developer::find(session("loggedUser"));
        $game = Game::find($gameID);
        $types = GameType::all();
        $type = GameType::where("TYPE_ID", $game->TYPE_ID)->first();
        return view('developer.updateGames')->with("game", $game)
                                          ->with("data", $data)
                                          ->with("type", $type)
                                          ->with("types", $types);
    }

    public function updateGamesToDB(Request $req){

        $game                       = Game::find($req->GAME_ID); 
        $game->GAME_NAME            = $req->GAME_NAME;
        $game->TYPE_ID              = $req->type;
        $game->GAME_PRICE           = $req->GAME_PRICE;
        $game->GAME_DESCRIPTION     = $req->GAME_DESCRIPTION;
        $game->GAME_REQ_OS          = $req->GAME_REQ_OS;
        $game->GAME_REQ_CPU         = $req->GAME_REQ_CPU;
        $game->GAME_REQ_RAM         = $req->GAME_REQ_RAM;
        $game->GAME_REQ_HDD         = $req->GAME_REQ_HDD;
        $game->GAME_REQ_GPU         = $req->GAME_REQ_GPU;
        $game->GAME_REQ_NETWORK     = $req->GAME_REQ_NETWORK;
        $game->GAME_STATUS          = "PENDING";


        $unique                     = uniqid();
        if( $req->file('GAME_FILES') ){
            File::delete($game->GAME_FILES);
            $gameFile               = $req->file('GAME_FILES'); 
            $nameFile               = $req->GAME_NAME . "_FILE_" . $unique . "." . 
                                           $gameFile->getClientOriginalExtension();
            $gameFile->move('game_files/'.$req->GAME_NAME, $nameFile);
            $game->GAME_FILES       = "game_files/". $req->GAME_NAME. '/' . $nameFile;
            }
            else if ($req->GAME_FILES_OLD){
            $game->GAME_FILES       = $req->GAME_FILES_OLD;                
            }

            if( $req->file('GAME_LOGO') ){
            File::delete($game->GAME_LOGO);
            $gameLogo               = $req->file('GAME_LOGO');
            $nameLogo               = $req->GAME_NAME . "_LOGO_" . $unique . "." . 
                                            $gameLogo->getClientOriginalExtension();
            $gameLogo ->move('game_files/'.$req->GAME_NAME, $nameLogo);
            $game->GAME_LOGO       = "game_files/". $req->GAME_NAME. '/' . $nameLogo ;
            }
            else if ($req->GAME_LOGO_OLD){
            $game->GAME_LOGO      = $req->GAME_LOGO_OLD;                
            }

            if( $req->file('GAME_SS') ){
            File::delete($game->GAME_SS);
            $gameSS              = $req->file('GAME_SS');
            $nameSS               = $req->GAME_NAME . "_SS_" . $unique . "." . 
                                    $gameSS->getClientOriginalExtension();
            $gameSS ->move('game_files/'.$req->GAME_NAME, $nameSS);
            $game->GAME_SS       = "game_files/". $req->GAME_NAME. '/' . $nameSS ;
            }
            else if ($req->GAME_SS_OLD){
            $game->GAME_SS      = $req->GAME_SS_OLD;                
            }
            $game->save(); 

            $history                    = UploadHistory::find($req->GAME_ID); 
            $history->USERNAME          = session("loggedUser");
            $history->GAME_ID           = $req->GAME_ID;
            $history->save();
            return redirect()->route('developer.viewGames', $req->GAME_ID); 
    }

    public function deleteGames($gameID){
        $data = Developer::find(session("loggedUser"));
        $game = Game::find($gameID);
        return view('developer.deleteGames')->with("game", $game)
                                          ->with("data", $data);
    }

    public function deleteGamesToDB($gameID){

        $data = Game::find($gameID);
        // File::delete($data->GAME_FILES);
        // File::delete($data->GAME_LOGO);
        // File::delete($data->GAME_SS);
        File::deleteDirectory(public_path('game_files/'.$data->GAME_NAME));
        $data->delete();

        $up = UploadHistory::find($gameID);
        $up->delete();

        return redirect()->route('developer.allGames');
    }

    public function developerAdvertisement(){
        $data = Developer::find(session("loggedUser"));
        $ad   = Advertisement::where("USERNAME", session("loggedUser"))->get();
        return view('developer.developerAdvertisement')->with("data", $data)
                                                        ->with("ad", $ad); 
    }
    public function developerAdvertisementToDB(Request $req){

        $file = $req->file('AD_IMAGE');
        $name = "AD_" . uniqid() . "." . $file->getClientOriginalExtension();
        $file->move('AD_IMAGE', $name);

        $ad                  = new Advertisement();
        $ad->AD_IMAGE        =  "AD_IMAGE/" . $name;
        $ad->USERNAME        = session("loggedUser");
        $ad->STATUS          = "PENDING";
        $ad->save();
        return redirect()->route('developer.developerAdvertisement');
    }

    public function helpline(){
        $data = Developer::find(session("loggedUser"));
        $chat = HotlineMessage::where("RECEIVER_ID", session("loggedUser"))
                                ->groupBy('CHAT_ID')
                                ->orderBy('DATE', 'ASC')
                                ->get();
        //  dd($chat);
        return view('developer.helpline')->with("data", $data)
                                         ->with("chat", $chat); 
    }

    public function chat($gamerID){
        $data = Developer::find(session("loggedUser"));
        $gamer= Gamer::find($gamerID);
        $sender = HotlineMessage::where("RECEIVER_ID", session("loggedUser"))
                                ->where("SENDER_ID", $gamerID)
                                ->orderBy('DATE', 'ASC')
                                ->get();
        $receiver = HotlineMessage::where("RECEIVER_ID", $gamerID)
                                ->where("SENDER_ID", session("loggedUser"))
                                ->orderBy('DATE', 'ASC')
                                ->get();
                            
        return view('developer.chat')->with("data", $data)
                                     ->with("gamer", $gamer) 
                                     ->with("sender", $sender)
                                     ->with("receiver", $receiver);                                 
    }

    public function chatToDB(Request $req , $gamerID){

        $message                    =   new HotlineMessage();
        $message->CHAT_ID           =   $gamerID . "_" . session("loggedUser");
        $message->SENDER_ID         =   session("loggedUser");
        $message->RECEIVER_ID       =   $gamerID;
        $message->MESSAGE           =   $req->MESSAGE;
        $dt = new DateTime();
        $message->DATE              =   $dt->format('Y-m-d H:i:s');
        $message->save();
        
        return redirect()->route('developer.chat' , $gamerID);
  
    }
      
    function action(Request $req){

        if($req->search){
            $search = DB::table('games')
                        // ->where('GAME_ID' , 'like' , '%'.$req->search.'%')
                        ->where('GAME_NAME' , 'like' , '%'.$req->search.'%')
                        ->get();
        }

        if($search){
            foreach ($search as $row) {
                // echo '<h1>'. $row->GAME_NAME . '</h1>';
                echo  $row->GAME_NAME ;
            }
        }
       
    }









    
}
