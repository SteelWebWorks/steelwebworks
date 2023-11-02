<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get("/countdown", function () {
    return view('countdown');
})->name('countdown');

Route::get("/chat", function () {
    return view('chat');
})->name('chat');

Route::get("/diceroller", function () {
    return view('diceroller');
})->name('diceroller');
