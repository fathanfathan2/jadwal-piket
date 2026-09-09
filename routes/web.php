<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Apa fungsi yukafi di bumi';
});

Route::get('/jancok', function () {
    return 'jancuyyyyyyyyyyyyyyyy';
});

Route::get('/piket', function () {
    return view('piket');
});