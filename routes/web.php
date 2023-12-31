<?php

use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController;
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
    Route::get('/players', 'listPlayers')->name('list_players');
    Route::get('/players/create', 'createPlayer')->name('create_player');
    Route::post('/players/create', 'savePlayer')->name('save_player');
    Route::get('/players/{id}', 'showPlayer')->name('show_player');
});

Route::controller(TeamsController::class)->group(function () {
    Route::get('/teams', 'listTeams')->name('list_teams');
    Route::get('/teams/create', 'createTeam')->name('create_team');
    Route::post('/teams/create', 'saveteam')->name('save_team');
    Route::get('/teams/{id}', 'showTeam')->name('show_team');
    Route::put('/teams/{id}', 'updateTeam')->name('update_team');
    Route::delete('/teams/{id}', 'deleteTeam')->name('delete_team');
    Route::get('/teams/{id}/edit', 'editTeam')->name('edit_team');
});


Route::controller(ManagerController::class)->group(function () {
    Route::get('/managers', 'listManagers')->name('list_managers');
    // Route::get('/players/create', 'createPlayer')->name('create_player');
    // Route::post('/players/create', 'savePlayer')->name('save_player');
    // Route::get('/players/{id}', 'showPlayer')->name('show_player');
});

Route::controller(LeagueController::class)->group(function () {
     Route::get('/leagues', 'listLeagues')->name('list_leagues');
    Route::post('/leagues/create', 'createLeague')->name('create_league');
});
