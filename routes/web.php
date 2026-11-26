<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
})->name("inicio");


Route::get('/proyecto', function () {
    return view('proyecto');
})->name("proyecto");

Route::get('/especies', function () {
    return view('especies');
})->name("especies");

Route::get('/contacto', function () {
    return view('contacto');
})->name("contacto");