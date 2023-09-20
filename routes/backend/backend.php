<?php

use App\Http\Controllers\backend\backendController;
use Illuminate\Support\Facades\Route;

Route::get("dashboard",[backendController::class,"dashboard"])->name("dashboard");
