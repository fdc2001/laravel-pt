<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/lang/{lang?}', function ($lang = null) {
    $lang = $lang ?? app()->getLocale();
    session()->put('lang', $lang);
    app()->setLocale($lang);
    return redirect()->back();
});

