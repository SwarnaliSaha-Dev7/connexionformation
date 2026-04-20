<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\InternshipCatalogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TrainingCatalogController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     // return view('welcome');
//     return view('layouts.app');
// });

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

Route::get('/', [HomePageController::class, 'homepage'])->name('homePage');
Route::get('/training-catalog', [TrainingCatalogController::class, 'listing'])->name('training-catalog-listing');
Route::get('/internship-catalog', [InternshipCatalogController::class, 'listing'])->name('internship-catalog-listing');
Route::get('/services', [ServiceController::class, 'listing'])->name('services');
