<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MController;
 
Route::get('/', [MController::class, 'kn']);
