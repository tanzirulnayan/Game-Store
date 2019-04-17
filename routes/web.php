<?php

Route::get('/', function () {
    return redirect()->route('landingPage.index');
});
/**************************** Landing Page ****************************/
Route::get('/', 'LandingPageController@index')->name('landingPage.index');

/**************************** Signup Page ****************************/
Route::get('/signup', 'SignupController@index')->name('signup.index');
Route::get('/signup/Gamer', 'SignupController@gamer')->name('signup.gamer');
Route::post('/signup/Gamer', 'SignupController@gamerToDB');

Route::get('/signup/Developer', 'SignupController@developer')->name('signup.developer');
Route::get('/signup/Moderator', 'SignupController@moderator')->name('signup.moderator');


/**************************** Login Page ****************************/
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');