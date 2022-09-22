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
        Route::post('book/update','update')->name('book.update');
    });
