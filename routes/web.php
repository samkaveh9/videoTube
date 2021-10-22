<?php

use App\Http\Controllers\ChannelController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('main');
});

Route::get('/single', function () {
    return view('single');
});


Route::resource('channels', ChannelController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
