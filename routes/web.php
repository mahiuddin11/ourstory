<?php

use App\Models\Catagory;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Status;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StatusController;

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
    return view('fontend.page.home');
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



Route::group(['prefix' => 'admin'], function () {
    Route::get('deshboard', function () {
        return view('Admin.partial.deshbord');
    })->name('deshboard');
});



Route::group(['prefix' => 'admin'], function () {




    // //admin catagorys route file
    Route::get('catagory',[CatagoryController::class,'index'])->name('catagory');
    Route::get('catagory-crate-page',[CatagoryController::class, 'create'])->name('catagory-create-page');
    Route::post('catagory-stor',[CatagoryController::class,'store'])->name('catagory-store');
    Route::get('catagories/{catagory}/edit', [CatagoryController::class, 'edit'])->name('catagories.edit');
    Route::get('catagories/{catagory}/show', [CatagoryController::class, 'show'])->name('catagories.show');
    Route::resource('catagories', CatagoryController::class);
    // Route::put('/admin/catagory-update/{catagory}', [CatagoryController::class, 'update'])->name('catagories.update');

    Route::get('catagory-delete',[CatagoryController::class, 'destroy'])->name('catagory.delete');


    // tag inpute all route

    Route::resource('tag', tagController::class);

    //post all route 
    Route::resource('post',PostController::class);

    // status all route 
    Route::resource('status',StatusController::class);



});
