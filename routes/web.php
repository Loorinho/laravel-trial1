<?php

use App\Http\Controllers\PlayersController;
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


Route::controller(PlayersController::class)->group(function () {
    Route::get('/players', 'index')->name('list_players');
    Route::post('/players', 'create')->name('create_player');
    Route::get('/players/{id}', 'show')->name('show_player');
});
