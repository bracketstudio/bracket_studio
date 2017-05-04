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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
	return view('about.aboutUs');
});

Route::get('/faq', function() {
	return view('about.faq');
});

Route::get('/contact', function() {
	return view('about.contact');
});

Route::get('/patreon', function() {
	return view('patreon');
});

Route::get('/synergy', function() {
	return view('synergy');
});

Route::get('/bsop', function() {
	return view('content.bsop');
});

Route::get('/buttonMosh', function() {
	return view('content.buttonMosh');
});

Route::get('/twitch', function() {
	return view('content.liveStream');
});

Route::get('/videos', function() {
	return view('content.videos');
});
