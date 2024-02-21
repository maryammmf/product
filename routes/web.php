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
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}' , 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/', 'update')->name('update');
    Route::delete('/', 'destroy')->name('destroy');
});

Route::prefix('posts')
    ->controller(PostController::class)
    ->name('posts.')
    ->group(function (){
        Route::get('/' , 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}' , 'show')->name('show');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/', 'update')->name('update');
        Route::delete('/', 'destroy')->name('destroy');
    });


Route::prefix('tags')
    ->controller(TagController::class)
    ->name('tags.')
    ->group(function (){
    Route::get('/' , 'index')->name('index');
    Route::get('/{id}' , 'show')->name('show');
});

Route::prefix('products')
    ->controller(ProductController::class)
    ->name('products.')
    ->group(function (){
        Route::get('/' , 'index')->name('index');
        Route::get('/{id}' , 'show')->name('show');
    });

//homework - week16 - question 8
Route::get('/{title}/{id}/{cat}', function ($title, $id, $cat) {

    return view("{$cat}.index", compact('title', 'id', 'cat'));

})->whereAlpha('title')
    ->whereNumber('id')
    ->whereIn('cat', ['sport', 'economy', 'values']);



