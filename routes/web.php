<?php

Route::get('/', function () {
    return redirect()->route('landingPage.index');
});
/****************** Landing Page ******************/
Route::get('/', 'LandingPageController@index')->name('landingPage.index');
//Route::post('/', 'LoginController@functionName');

/****************** Signup Page ******************/
Route::get('/signup', 'SignupController@index')->name('signup.index');
Route::get('/signup/Gamer', 'SignupController@gamer')->name('signup.gamer');


/****************** Login Page ******************/
Route::get('/login', 'LoginController@index')->name('login.index');
// Route::post('/login', 'LoginController@verify');