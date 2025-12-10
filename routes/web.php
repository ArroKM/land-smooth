<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('clear-cache', function () {
    Artisan::call('optimize:clear');
    return 'success';
});
