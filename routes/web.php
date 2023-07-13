<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
// All Listings
Route::get('/', [ListingController::class, 'index']);




//kreiranje novih
Route::get('/listings/create',
[ListingController::class, 'create'])->middleware('auth');

//spremanje
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//editiranje
Route::get('/listings/{listing}/edit',
[ListingController::class, 'edit'])->middleware('auth');

//update
Route::put('/listings/{listing}',
[ListingController::class, 'update'])->middleware('auth');

//delete
Route::delete('/listings/{listing}',
[ListingController::class, 'delete'])->middleware('auth');

// Single Listing
Route::get('/listings/{listing}',
[ListingController::class, 'show']);

//Registracija
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Kreiraj korisnika

Route::post('/users', [UserController::class, 'store']);

//logout

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//login
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);