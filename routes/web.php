<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/inventory', function () {
    return view('inventory.index');
});
