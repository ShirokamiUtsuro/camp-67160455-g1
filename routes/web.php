<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function (){
    return view('template.default');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::Class, 'index']);
Route::get('/calculate', [App\Http\Controllers\MyController::Class, 'info']);
Route::post('/calculate', [App\Http\Controllers\MyController::Class, 'calculate']);
