<?php

use Illuminate\Support\Facades\Route;


Route::get('', function () {
    return view('presentations.home');
})->name('home');

Route::get('apropos', function ()
{
   return view('presentations.apropos');
})->name('apropos');

