<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Myfirstcontroller;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PerkuliahanController;

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
Route::get('/page2', function () {
    return view('mod8aview');
});

Route::get('/mastermhs', [MasterController::class, 'mastermahasiswa']);
Route::get('/mastermk', [MasterController::class, 'mastermk']);
Route::get('/masterkelas', [MasterController::class, 'masterkelas']);
Route::get('/masterdosen', [MasterController::class, 'masterdosen']);

Route::post('/submitmhs', [MasterController::class, 'submitMahasiswa']);

Route::get('/jdwlkuliah', [PerkuliahanController::class, 'jadwalkuliah']);
Route::get('/jdwlujian', [PerkuliahanController::class, 'jadwalujian']);
Route::get('/absenmhs', [PerkuliahanController::class, 'absenmahasiswa']);
Route::get('/nilaimhs', [PerkuliahanController::class, 'nilaimahasiswa']);
