<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

    Route::controller(BookController::class)->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ] )->prefix(LaravelLocalization::setLocale())->group(function (){
        Route::get('book/create','create')->name('book.create');
        Route::post('book/store','store')->name('book.store');
        Route::get('book/show','index')->name('book.index');
        Route::get('book/edit/{book_id}','edit');
        Route::post('book/update/{book_id}','update')->name('book.update');
    });

    Route::controller(\App\Http\Controllers\PostController::class)->prefix('post')->group(function (){
        Route::get('create','create')->name('post.create');
        Route::post('store','store')->name('post.store');
        Route::get('index','index')->name('showdata');
        Route::get('edit/{post_id}','edit')->name('post.edit');
        Route::post('update/{post_id}','update')->name('post.update');
    });
