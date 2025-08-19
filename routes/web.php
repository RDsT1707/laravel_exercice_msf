<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeformationController;
use App\Http\Controllers\EleveController;

Route::get('/batiments', [BatimentController::class, 'index']);
Route::get('/formations', [FormationController::class, 'index']);
Route::get('/typeformations', [TypeformationController::class, 'index']);
Route::get('/eleves', [EleveController::class, 'index']);
