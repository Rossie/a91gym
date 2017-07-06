<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

Route::get('/', function (Request $req) {
		// Log::debug(var_export($req, true));
    // return view('landingpage');
    return View::make('pagebase');
});

Route::get('/orarend', function (Request $req) {
    return View::make('pagebase');
});

Route::get('/bemutatkozas', function (Request $req) {
    return View::make('pagebase');
});

Route::get('/arak', function (Request $req) {
    return View::make('pagebase');
});

Route::get('/kapcsolat', function (Request $req) {
    return View::make('pagebase');
});



/*
rolunk
orarend
elerhetoseg
galeria
*/