<?php

use App\Http\Controllers\IngatlanController;
use App\Http\Controllers\PropertyController;
use App\Models\Ingatlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/ingatlan', [(IngatlanController::class), 'index']);