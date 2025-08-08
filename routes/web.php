<?php

use App\Http\Controllers\FitnessController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mlb', [PlayerController::class, 'index'])->name('mlb.index');
Route::get('/mlb/{uuid}', [PlayerController::class, 'show'])->name('mlb.show');

Route::get('/fitness', [FitnessController::class, 'index'])->name('fitness.index');
