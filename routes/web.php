<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('Home');
});
Route::get('/Sign',[AuthController::class, 'showsign']);
Route::post('/Sign',[AuthController::class, 'insert']);
Route::get('/Login',[AuthController::class,'showlogin']);
Route::post('/Login',[AuthController::class,'login']);
Route::post('/Logout',[AuthController::class,'logout']);

Route::get('/Home', function () {
    return view('Home');
});
Route::get('/Champions', function () {
    return view('Champions');
});
Route::get('/Rune', function () {
    return view('Rune');
});
Route::get('/Skins', function () {
    return view('Skins');
});
Route::get('/Items', function () {
    return view('Items');
});
Route::get('/Runes', function () {
    return view('Runes');
});

Route::get('/Items',[LeagueController::class,'Items']);
Route::get('/Skin/{name}',[LeagueController::class,'Skin']);
Route::get('/Skins',[LeagueController::class,'Skins']);
Route::get('/Runes', [LeagueController::class, 'Rune']);
Route::get('/Rune/{name}', [LeagueController::class, 'Runes']);
Route::get('/Champions', [LeagueController::class, 'Champions']);

Route::get('/Champion/{id}',[LeagueController::class,'Champion']);


