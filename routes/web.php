<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/area-privata', function () {
    return view('auth.private');
})->middleware('auth');
