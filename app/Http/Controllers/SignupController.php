<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gamer;
use App\LoginCredential;

class SignupController extends Controller
{
/****************** Index ******************/    
    public function index(){
    	return view('signup.index');
    }
/****************** Gamer ******************/
    public function gamer(){
    	return view('signup.gamer');
    }


public function gamerToDB(Request $req){
    $gamer = new Gamer;
    $gamer->USERNAME = $req->USERNAME;
    $gamer->G_NAME = $req->G_NAME;
    $gamer->G_EMAIL = $req->G_EMAIL;
    $gamer->G_COUNTRY = $req->G_COUNTRY;
    $gamer->G_MOBILE = $req->G_MOBILE;
    $gamer->G_GENDER = $req->G_GENDER;
    $gamer->G_DOB = $req->G_DOB;
    $gamer->G_CREDIT_CARD = $req->G_CREDIT_CARD;
    $gamer->G_IMAGE = $req->G_IMAGE;
    $gamer->save();  

    $loginGamer = new LoginCredential();
    $loginGamer->USERNAME = $req->USERNAME;
    $loginGamer->PASSWORD = $req->PASSWORD;
    $loginGamer->USER_TYPE = "GAMER";

    return view('seller.index');
    
}
















}
