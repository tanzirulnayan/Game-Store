<?php
Route::get('/', function () {
    return redirect()->route('landingPage.index');
});
/**************************** Landing Page ****************************/
Route::get('/', 'LandingPageController@index')->name('landingPage.index');

/**************************** Signup  ****************************/
Route::get('/signup', 'SignupController@index')->name('signup.index');
Route::get('/signup/Gamer', 'SignupController@gamer')->name('signup.gamer');
Route::post('/signup/Gamer', 'SignupController@gamerToDB');
Route::get('/signup/Developer', 'SignupController@developer')->name('signup.developer');
Route::post('/signup/Developer', 'SignupController@developerToDB');
Route::get('/signup/Moderator', 'SignupController@moderator')->name('signup.moderator');
Route::post('/signup/Moderator', 'SignupController@moderatorToBD');

/**************************** Login ****************************/
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

/**************************** Logout ****************************/
Route::get('/logout', 'LogoutController@index')->name('logout.index');


/****************************UNDER SESSION CHECK****************************/
Route::group(["middleware"=>['session']], function(){

/**************************** GAMER ****************************/
Route::get('/Gamer/Index', 'GamerController@index')->name('gamer.index');

Route::get('/Gamer/ViewProfile', 'GamerController@viewProfile')->name('gamer.ViewProfile');

Route::get('/Gamer/EditProfile', 'GamerController@editProfile')->name('gamer.EditProfile');
Route::post('/Gamer/EditProfile', 'GamerController@updateProfile');

Route::get('/Gamer/ChangePicture', 'GamerController@changePicture')->name('gamer.ChangePicture');
Route::post('/Gamer/ChangePicture', 'GamerController@updatePicture');

Route::get('/Gamer/ChangePassword', 'GamerController@changePassword')->name('gamer.ChangePassword');
Route::post('/Gamer/ChangePassword', 'GamerController@updatePassword');

Route::get('/Gamer/ReportAbuse', 'GamerController@reportAbuse')->name('gamer.ReportAbuse');
Route::post('/Gamer/ReportAbuse', 'GamerController@saveReportAbuse');

Route::get('/Gamer/ViewGame/{gameId}', 'GamerController@viewGame')->name('gamer.ViewGame');

Route::get('/Gamer/ViewDeveloper/{devId}', 'GamerController@viewDeveloper')->name('gamer.ViewDeveloper');

/**************************** DEVELOPER ****************************/
Route::get('/Developer/Home', 'DeveloperController@index')->name('developer.index');

Route::get('/Developer/View_Profile', 'DeveloperController@viewProfile')->name('developer.viewProfile');

Route::get('/Developer/EDIT_Profile', 'DeveloperController@editProfile')->name('developer.editProfile');
Route::post('/Developer/EDIT_Profile', 'DeveloperController@editProfileToDB');

Route::get('/Developer/Change_Picture', 'DeveloperController@changePicture')->name('developer.changePicture');
Route::post('/Developer/Change_Picture', 'DeveloperController@changePictureToDB');

Route::get('/Developer/Change_Password', 'DeveloperController@changePassword')->name('developer.changePassword');
Route::post('/Developer/Change_Password', 'DeveloperController@changePasswordToDB');

Route::get('/Developer/ALL_Games', 'DeveloperController@allGames')->name('developer.allGames');

Route::get('/Developer/{gameID}/VIEW_Games', 'DeveloperController@viewGames')->name('developer.viewGames');

Route::get('/Developer/ADD_Games', 'DeveloperController@addGames')->name('developer.addGames');
Route::post('/Developer/ADD_Games', 'DeveloperController@addGamesToDB');

Route::get('/Developer/{gameID}/UPDATE_Games', 'DeveloperController@updateGames')->name('developer.updateGames');
Route::post('/Developer/{gameID}/UPDATE_Games', 'DeveloperController@updateGamesToDB');

Route::get('/Developer/{gameID}/DELETE_Games', 'DeveloperController@deleteGames')->name('developer.deleteGames');
Route::post('/Developer/{gameID}/DELETE_Games', 'DeveloperController@deleteGamesToDB');

Route::get('/Developer/Developer_Advertisement', 'DeveloperController@developerAdvertisement')->name('developer.developerAdvertisement');
Route::post('/Developer/Developer_Advertisement', 'DeveloperController@developerAdvertisementToDB');

Route::get('/Developer/Help_Line', 'DeveloperController@helpline')->name('developer.helpline');
Route::post('/Developer/Help_Line', 'DeveloperController@helplineToDB');

Route::get('/Developer/Help_Line/{gamerID}/Chat', 'DeveloperController@chat')->name('developer.chat');
Route::post('/Developer/Help_Line/{gamerID}/Chat', 'DeveloperController@chatToDB');

/**************************** MODERATOR ****************************/

Route::get('/Moderator/Home', 'ModeratorController@index')->name('moderator.index');


/****************************UNDER SESSION CHECK END****************************/
});