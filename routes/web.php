<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Myfirstcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "Hello World";
});

Route::get('/halo', [Myfirstcontroller::class, 'Halo']);

Route::get('/dengan/parameter/{id}', [Myfirstcontroller::class, 'withparam']);

Route::get('/view', [Myfirstcontroller::class, 'showfirstview']);

Route::get('/viewwithdata', [Myfirstcontroller::class, 'viewwithdata']);

Route::get('/admin', [Myfirstcontroller::class, 'admin']);

Route::get('/layout', function () {
    return view('layout.main');
});

Route::get('/page1', function () {
    return view('pageview');
});
