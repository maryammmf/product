<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('users')
    ->controller(UserController::class)
    ->name('users.')
    ->group(function (){
    Route::get('/' , 'index')->name('index');
    Route::get('/{id}' , 'show')->name('show');
        Route::get('register', 'register')->name('register');
        Route::post('login', 'login')->name('login');
});

Route::prefix('posts')
    ->controller(PostController::class)
    ->name('posts.')
    ->group(function (){
        Route::get('/' , 'index')->name('index');
        Route::get('/{id}' , 'show')->name('show');
        Route::get('create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
    });

Route::prefix('tags')
    ->controller(TagController::class)
    ->name('tags.')
    ->group(function (){
    Route::get('/' , 'index')->name('index');
    Route::get('/{id}' , 'show')->name('show');
        Route::get('create', 'create')->name('create');

});

Route::prefix('products')
    ->controller(ProductController::class)
    ->name('products.')
    ->group(function (){
        Route::get('/' , 'index')->name('index');
        Route::get('/{id}' , 'show')->name('show');
    });
