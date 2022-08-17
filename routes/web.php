<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
Route::name('home')->get('', function () {
    return view('presentations.home');
});
*/

//Route::name('home')->get('', fn() => view('presentations.home'));

Route::name('home')->get('', [MainController::class, 'home']);

Route::view('apropos', 'presentations.apropos')->name('apropos');

/*
Route::get('apropos', function ()
{
   return view('presentations.apropos');
})->name('apropos');*/

