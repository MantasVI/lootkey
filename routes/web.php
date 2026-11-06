<?php

use Illuminate\Support\Facades\Route;

Route::get('/lt', function () {
    return view('mainLithuania');
});
Route::get('/', function () {
    return view('mainEnglish');
});
Route::get('/store', function () {
    return view('store');
});
Route::get('/store/cheap-games', function () {
    return view('cheap-games');
});
Route::get('/checkout', function () {
    return view('checkout');
});