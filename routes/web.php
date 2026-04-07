<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     return view('layouts.app');
// });

Route::get('/', [HomePageController::class, 'homepage'])->name('homePage');
