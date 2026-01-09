<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PokedexController;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function (){
    return view('template.default');
});

Route::get('/mycontroller', [MyController::Class, 'index']);
Route::get('/calculate', [MyController::Class, 'info']);
Route::post('/calculate', [MyController::Class, 'calculate']);
Route::get('/workshop', [MyController::class, 'index']);
Route::post('/workshop', [MyController::class, 'store']);

Route::resource('/flights', App\Http\Controllers\FlightController::class);

Route::resource('pokedex', PokedexController::class);


