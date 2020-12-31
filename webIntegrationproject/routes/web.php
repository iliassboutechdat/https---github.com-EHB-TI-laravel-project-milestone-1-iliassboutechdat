<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Models\User;

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
//Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('searchForm.search');
//Route::get('/search/result', [App\Http\Controllers\SearchController::class, 'searchResult'])->name('searchForm.searchResult');


Auth::routes();

Route::get('/profile/{username}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
Route::get('/edit/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/update/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

//Route::get('/posts{post}', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::resource('posts',\App\Http\Controllers\PostController::class);

Route::get('/about', function() {
    return view('about');
});

Route::get('/search', function() {
    return view('searchForm.search');
});

Route::any('/search/result',function(){
    $q = Request::get ( 'q' );
    $user = User::where('username','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('searchForm.searchResult')->withDetails($user)->withQuery ( $q );
    else return view ('searchForm.searchResult')->withMessage('No Details found. Try to search again !');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::post('/send-message',[App\Http\Controllers\ContactController::class,'sendEmail'])->name('contact.send');
 
Route::get('/contact',[App\Http\Controllers\ContactController::class,'contact']);
