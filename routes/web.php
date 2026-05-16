<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeagueController;
Route::get('/', function () {
    return view('Home');
});
Route::get('/Champions', function () {
    return view('Champions');
});
Route::get('/Champions', [LeagueController::class, 'index']);


Route::get('/Skins', function () {
    return view('Skins');
});
Route::get('/Items', function () {
    return view('Items');
});
Route::get('/Runes', function () {
    return view('Runes');
});
