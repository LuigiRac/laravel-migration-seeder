<?php

use App\Http\Controllers\Guest\TrainsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TrainsController::class, 'index']);
