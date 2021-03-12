<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

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