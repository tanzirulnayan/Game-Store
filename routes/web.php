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

/**************************** Login ****************************/
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

/**************************** Logout ****************************/
Route::get('/logout', 'LogoutController@index')->name('logout.index');


/****************************UNDER SESSION CHECK****************************/
Route::group(["middleware"=>['session']], function(){

/**************************** GAMER ****************************/
Route::get('/Gamer/Home', 'GamerController@index')->name('gamer.index');

/**************************** DEVELOPER ****************************/
Route::get('/Developer/Home', 'DeveloperController@index')->name('developer.index');

Route::get('/Developer/View_Profile', 'DeveloperController@viewProfile')->name('developer.viewProfile');

Route::get('/Developer/EDIT_Profile', 'DeveloperController@editProfile')->name('developer.editProfile');
Route::post('/Developer/EDIT_Profile', 'DeveloperController@editProfileToDB');

Route::get('/Developer/Change_Picture', 'DeveloperController@changePicture')->name('developer.changePicture');
Route::post('/Developer/Change_Picture', 'DeveloperController@changePictureToDB');

Route::get('/Developer/Change_Password', 'DeveloperController@changePassword')->name('developer.changePassword');
Route::post('/Developer/Change_Password', 'DeveloperController@changePasswordToDB');




/****************************UNDER SESSION CHECK END****************************/
});