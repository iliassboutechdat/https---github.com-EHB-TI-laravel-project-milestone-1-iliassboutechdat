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

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('index');


Auth::routes();

Route::get('/profile/{username}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
Route::get('/edit/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/update/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

//Route::get('/posts{post}', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::resource('posts',\App\Http\Controllers\PostController::class);

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::post('/send-message',[App\Http\Controllers\ContactController::class,'sendEmail'])->name('contact.send');
 
Route::get('/contact',[App\Http\Controllers\ContactController::class,'contact']);
