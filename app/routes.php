<?php

Route::get('/', function()
{
	return View::make('guest.index');
});
Route::group(array('before'=>'auth'),function(){
	Route::get('dashboard','HomeController@dashboard');
	Route::group(array('prefix'=>'admin','before'=>'admin'),function (){
		Route::resource('authors','AuthorsController');
	});
});
// Route::get('dashboard',array('before'=>'auth','uses'=>'HomeController@dashboard'));
Route::get('login',array('guest.login','uses'=>'GuestController@login'));
Route::post('authenticate','HomeController@authenticate');
Route::get('logout','HomeController@logout');
?>
