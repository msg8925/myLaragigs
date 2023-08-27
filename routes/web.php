<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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
    
//     return view('welcome');
// });



Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

Route::post('/listings', [ListingController::class, 'store']);

//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Show signup form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create a new user 
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// Authenticate a user 
Route::post('users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Route::get('/test', [ListingController::class, 'test']);



