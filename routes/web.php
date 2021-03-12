<?php

use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TeamController::class, 'index']);
Route::post('/addTeam', [TeamController::class, 'store']);
Route::get('/ShowTeam/{id}', [TeamController::class, 'show']);
Route::get('/editTeam/{id}', [TeamController::class, 'edit']);
Route::post('/team-update/{id}', [TeamController::class, 'update']);
Route::get('/team-delete/{id}', [TeamController::class, 'destroy']);

Route::get('/add-membre', function () {
    return view('AddMembre');
});

Route::get('/add-team', function () {
    return view('AddTeam');
});

Route::get('/ShowTeam', function () {
    return view('ShowTeam');
});

Route::get('/ShowMembre', function () {
    return view('ShowMembre');
});