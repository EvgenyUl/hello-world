<?php 

use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerController::class, 'method']);
Route::any('/', function(){
	return 'Hello, World!';
});