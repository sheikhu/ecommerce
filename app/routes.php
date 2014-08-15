<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::when('*', 'csrf', array('post'));

Route::get('/', function()
{
    return View::make('hello');
});

Route::group(['before' => 'auth'], function(){

    Route::get('home', ['as' => 'homepage', function(){

        return View::make('auth.home');
    }]);



    Route::get('logout', ['as' => 'logout', function(){

        Auth::logout();

        return Redirect::route('homepage');
    }]);


});


Route::group(['before' => 'guest'], function(){


    Route::get('login', [ 'as' => 'login', function(){
        return View::make('auth.login');
    }]);


    Route::post('login', ['as' => 'post_login', function(){

        $credentials = Input::only(array('email', 'password'));

        if(Auth::attempt($credentials))
        {
            return Redirect::to('/home')->withSuccess('You are successfully authenticated!');
        }

        return Redirect::to('login')->withInput()->withError('Bad credentials ! Please retry.');
    }]);

    Route::controller('password', 'RemindersController');


});






