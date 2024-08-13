<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('fontend.page.home');
});
Route::get('post', function () {
    return view('fontend.page.post');
});

Route::get('category', function () {
    return view('fontend.page.category');
});

Route::get('about', function () {
    return view('fontend.page.about');
});

Route::get('contact', function () {
    return view('fontend.page.contact');

});

Route::get('team', function () {
    return view('fontend.page.team');
});

Route::get('admin', function () {
    return view('Admin.master');
});

Route::get('deshbord', function () {
    return view('Admin.partial.deshbord');
});
