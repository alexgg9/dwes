<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('inicio');
});

/*
Route::post();
Route::put();
Route::delete();
Route::patch();
*/