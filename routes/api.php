<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;

Route::get('/universes', [UniverseController::class, 'index']);
Route::get('/universes/{id}', [UniverseController::class, 'show']);
Route::post('/universes', [UniverseController::class, 'store']);
Route::put('/universes/{id}', [UniverseController::class, 'update']);
Route::delete('/universes/{id}', [UniverseController::class, 'destroy']);

Route::get('/superheroes', [SuperheroController::class, 'index']);
Route::get('/superheroes/{id}', [SuperheroController::class, 'show']);
Route::post('/superheroes', [SuperheroController::class, 'store']);
Route::put('/superheroes/{id}', [SuperheroController::class, 'update']);
Route::delete('/superheroes/{id}', [SuperheroController::class, 'destroy']);