<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
});
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome')->middleware('is_admin');


