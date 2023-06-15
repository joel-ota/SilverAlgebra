<?php

use App\Http\Controllers\MediaController;
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

Route::view('/homepage', 'welcome')->name('home');

Route::controller(MediaController::class)->group(function (){
    Route::get('/media', 'index');

    Route::get('/media/{name}', 'show')
        ->whereAlpha('name');

    Route::get('/media/{id}', 'showById');
});

Route::prefix('admin')->group(function(){
    Route::get('/csrf', function(){
        return 'foo';
    });
    
    Route::get('/redirect', function(){
        return to_route('home');
    });
});