<?php 

use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerController::class, 'method']);
Route::any('/', function(){
	return 'Hello, World!';
});

Route::redirect('/here', '/there');
Route::redirect('/here', '/there', 301);
Route::permanentRedirect('/here', '/there');