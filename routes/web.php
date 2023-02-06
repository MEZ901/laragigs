<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listing/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post('/listing', [ListingController::class, 'store']);

// Show Edit Form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('/listing/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('/listing/{listing}', [ListingController::class, 'delete']);

// Single Listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

// Show Register Form
Route::get('/register', [UserController::class, 'register']);

// submit Register Form
Route::post('/users', [UserController::class, 'store']);

// Logout
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login']);

// Login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);