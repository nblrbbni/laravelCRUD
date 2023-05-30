<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\HomeController;

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

Route::get("/", [HomeController::class, "home"])->name("dashboard");
Route::get("/categories", [HomeController::class, "categories"])->name("categories");
Route::get("/authors", [HomeController::class, "authors"])->name("authors");
Route::get("/borrowings", [HomeController::class, "borrowings"])->name("borrowings");