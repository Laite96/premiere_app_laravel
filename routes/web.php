<?php

use Illuminate\Support\Facades\Route;

/*
Route::name('home')->get('', function () {
    return view('presentations.home');
});
*/

Route::name('home')->get('', fn() => view('presentations.home'));

Route::view('apropos', 'presentations.apropos')->name('apropos');

/*
Route::get('apropos', function ()
{
   return view('presentations.apropos');
})->name('apropos');*/

