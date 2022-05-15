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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('/');
Route::get('/about-us', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');

Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('users.login');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'doLogin'])->name('users.do_login');
Route::get('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('users.register');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'doRegister'])->name('users.do_register');
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('users.logout');


////// Admin Authentications ///////////
Route::group(['middleware'=>'admin'],function (){
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);
});

////// User Authentications ///////////
Route::group(['middleware'=>'FrontLogin_middleware'],function (){

     Route::get('/manage-posts', [App\Http\Controllers\PostController::class, 'managePosts'])->name('managePosts');

    Route::get('/myaccount', [\App\Http\Controllers\UserController::class, 'account'])->name('users.account');
    Route::get('/my-post', [App\Http\Controllers\PostController::class, 'myPosts'])->name('my-posts');
    Route::get('/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\PostController::class, 'store'])->name('store');
    Route::get('post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('show');
    Route::get('edit/{post}', [App\Http\Controllers\PostController::class, 'edit'])->name('edit');
    Route::put('edit/{post}',[App\Http\Controllers\PostController::class, 'update'])->name('update');
    Route::delete('/{post}',[App\Http\Controllers\PostController::class, 'destroy'])->name('destroy');
});