<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::middleware('language')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});


