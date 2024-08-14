<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatagoryController;
use App\Models\Catagory;

/*/
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



Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('Admin.partial.deshbord');
    });

    //admin catagorys route file
    Route::get('catagory',[CatagoryController::class,'index'])->name('catagory');
});
