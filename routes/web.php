<?php

use Illuminate\Support\Facades\Route;


Route::name('home')->get('', function () {
    return view('presentations.home');
});

Route::get('apropos', function ()
{
   return view('presentations.apropos');
})->name('apropos');

