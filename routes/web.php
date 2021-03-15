<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use App\Models\Team;
use Illuminate\Support\Facades\Route;


Route::get('/', [TeamController::class, 'index']);
Route::post('/addTeam', [TeamController::class, 'store']);
Route::get('/ShowTeam/{id}', [TeamController::class, 'show']);
Route::get('/editTeam/{id}', [TeamController::class, 'edit']);
Route::post('/team-update/{id}', [TeamController::class, 'update']);
Route::get('/team-delete/{id}', [TeamController::class, 'destroy']);

Route::get('/add-membre', [PlayerController::class, 'index']);
Route::post('/add-membre', [PlayerController::class, 'store']);

Route::get('/add-team', function () {
    $teams = Team::all();
    return view('AddTeam', compact('teams'));
});

Route::get('/ShowTeam', function () {
    return view('ShowTeam');
});

Route::get('/ShowMembre', function () {
    return view('ShowMembre');
});

Route::get('/dashboard', [Dashboard::class, 'index']);

Route::get('/ShowMembre/{id}', [PlayerController::class, 'show']);

Route::get('/editMembre/{id}', [PlayerController::class, 'edit']);
Route::post('/membre-update/{id}', [PlayerController::class, 'update']);