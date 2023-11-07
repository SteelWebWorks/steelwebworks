<?php

use App\Http\Controllers\KofiController;
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

Route::prefix('kofi')->group(function () {
    Route::controller(KofiController::class)->group(function () {
        Route::get("/donatebar", 'donateBar')->name('donatebar');
        Route::get("/getdonategoal", 'getDonateGoal')->name('getdonategoal');

        Route::get("/setdonategoal", function () {
            return view("setdonategoal");
        })->name('setDonateGoal');
        Route::post("/setdonategoal", 'setDonateGoal')->name('setdonategoal');
        Route::post("/savedonate", 'saveDonate')->name('savedonate');
    });
});
