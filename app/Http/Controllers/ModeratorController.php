<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Moderator;
use App\LoginCredential;
use App\Gamer;
use App\Developer;
use App\Game;
use App\GameType;
use App\UploadHistory;
use Illuminate\Support\Facades\Redirect;

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

    public function pendingList(){
        $data = Moderator::find(session("loggedUser"));
        $list = LoginCredential::where("STATUS", '=', "PENDING")
                                ->where("USER_TYPE" , "=" , "GAMER")
                                ->get();

       
       
        return view('moderator.pendingList')->with("data", $data) 
                                           ->with("list", $list);
    }

    public function pendingListToDB($USERNAME){
        
        $active = LoginCredential::find($USERNAME);
        $active->STATUS = "ACTIVE";
        $active->save();
        return redirect()->route('moderator.pendingList'); 
       
    }

    public function gamerList(){
        $data = Moderator::find(session("loggedUser"));
        $list = Gamer::all();
   
        return view('moderator.gamerList')->with("data", $data) 
                                           ->with("list", $list);
    }

    public function deleteGamerToDB($USERNAME){

        $data = Gamer::find($USERNAME);
        $value = LoginCredential::find($USERNAME);
        //File::deleteDirectory(public_path("Image_Folder/".$data->G));
        $data->delete();
        $value->delete();

        return redirect()->route('moderator.gamerList');
    }

    public function viewProfileGamer($USERNAME){

        $data = Moderator::find(session("loggedUser"));
        $value = Gamer::find($USERNAME);
        
        return view('moderator.viewProfileGamer')->with("value", $value)
                                                ->with("data", $data);  
    }


    public function developerList(){
        $data = Moderator::find(session("loggedUser"));
        $list = Developer::all();
   
        return view('moderator.developerList')->with("data", $data) 
                                           ->with("list", $list);
    }
   
    
    public function deleteDeveloperToDB($USERNAME){

        $data = Developer::find($USERNAME);
        $value = LoginCredential::find($USERNAME);
        //File::deleteDirectory(public_path("Image_Folder/".$data->G));
        $data->delete();
        $value->delete();

        return redirect()->route('moderator.developerList');
    }

    
    // public function allGames($gameID){
    //     $data = Moderator::find(session("loggedUser"));
    //     $game = Game::find($gameID);
    //     $type = GameType::where("TYPE_ID", $game->TYPE_ID)->first();
    //     return view('Moderator.viewGames')->with("game", $game)
    //                                       ->with("data", $data)
    //                                       ->with("type", $type);
    // }

    public function allGames($USERNAME){
        $data = Moderator::find(session("loggedUser"));

        $game = DB::table('games')
        ->select('games.GAME_ID','games.GAME_NAME','games.GAME_STATUS','upload_history.USERNAME')
        ->join('upload_history','upload_history.GAME_ID','=','games.GAME_ID')
        ->where(['USERNAME' => $USERNAME])
        ->get();
    
        return view('moderator.allGames')->with("data", $data)
                                          ->with("game", $game);
    }



    public function viewProfileDeveloper($USERNAME){

        $data = Moderator::find(session("loggedUser"));
        $value = Developer::find($USERNAME);
        
        return view('moderator.viewProfileDeveloper')->with("value", $value)
                                                ->with("data", $data);  
    }


    public function viewGames($gameID){
        $data = MOderator::find(session("loggedUser"));
        $game = Game::find($gameID);
        $type = GameType::where("TYPE_ID", $game->TYPE_ID)->first();
        return view('Moderator.viewGames')->with("game", $game)
                                          ->with("data", $data)
                                          ->with("type", $type);
    }




    public function changeGameToDB($gameID){
        
        $active = Game::find($gameID);

        if( $active->GAME_STATUS == "PENDING")
        {
            $active->GAME_STATUS = "ACTIVE";
        }
        else if( $active->GAME_STATUS == "ACTIVE")
        {
           $active->GAME_STATUS = "PENDING";
        }
    
        $active->save();
        return redirect()->route('moderator.developerList'); 
       
    }

    function action(Request $req){

        if($req->search){
            $search = DB::table('gamers')
                      
                        ->where('G_NAME' , 'like' , '%'.$req->search.'%')
                        ->get();
        }

        if($search){
            foreach ($search as $row) {
                echo '<option>'. $row->G_NAME . '</option>';
    
            }
        }
        
       
    }

    function actionView(Request $req){
            
        $game = Gamer::where("G_NAME", "=", $req->search)->first();
        if($game){
            return redirect()->route('moderator.viewProfileGamer' , $game->USERNAME );      
        }
        else{
            return \Redirect::back()->withError( 'Gamer Not Found ' );
        }

        
    }



}
