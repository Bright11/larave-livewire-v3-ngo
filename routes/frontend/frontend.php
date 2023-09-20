<?php

use App\Http\Controllers\frontend\frontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('frontend/index');
// });

Route::get("/",[frontendController::class,'index'])->name("index");

Route::get("/aboutus",[frontendController::class,'aboutus'])->name("aboutus");

Route::get("/gallery",[frontendController::class,'gallery'])->name("gallery");

Route::get("/whomweare",[frontendController::class,'whomweare'])->name("whomweare");

Route::get("/involved",[frontendController::class,'involved'])->name("involved");


Route::get("/contact",[frontendController::class,'contact'])->name("contact");
