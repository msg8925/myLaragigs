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

Route::get('/listings/create', [ListingController::class, 'create']);

Route::post('/listings', [ListingController::class, 'store']);

//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show login form
Route::get('/login', [UserController::class, 'login']);

// Show signup form
Route::get('/register', [UserController::class, 'create']);

// Create a new user 
Route::post('/users', [UserController::class, 'store']);

// Authenticate a user 
Route::post('users/authenticate', [UserController::class, 'authenticate']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

//Route::get('/test', [ListingController::class, 'test']);



