<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
Route::name('home')->get('', function () {
return view('presentations.home');
});
 */

//Route::name('home')->get('', fn() => view('presentations.home'));

Route::name('home')->get('', [MainController::class, 'home']);

Route::get('article', [MainController::class, 'article'])->name('article');

Route::get('apropos', [MainController::class, 'apropos'])->name('apropos');

//Route::view('apropos', 'presentations.apropos')->name('apropos');

/*
Route::get('apropos', function ()
{
return view('presentations.apropos');
})->name('apropos');*/
