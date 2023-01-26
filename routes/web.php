<?php

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
    return view('home');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/bali',function(){
    return view('bali');
});

Route::get('/book',function(){
    return view('book');
});

Route::get('/signup',function(){
    return view('signup');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/details',function(){
    return view('details');
});