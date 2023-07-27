<?php

use App\Http\Controllers\frontEndController;
use App\Http\Controllers\LoginController;
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

Route::get('demo', [frontEndController::class, 'demo'])->name('demo'); // e route kitan home vilicha mathi ellodam

Route::group(['prefix' => '/', 'namespace' => 'Frontend'], function () {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('do-login', [LoginController::class, 'doLogin'])->name('do.login');
    Route::get('do-logout', [LoginController::class, 'doLogout'])->name('logout');
});

Route::get('home', [frontEndController::class, 'home'])->name('home'); // e route kitan home vilicha mathi ellodam
Route::post('save-user', [frontEndController::class, 'store'])->name('save.user');
//edit id need.
Route::get('edit-user/{user_id}', [frontEndController::class, 'edit'])->name('edit.user');

//update  id avashym ella
Route::post('update-user', [frontEndController::class, 'update'])->name('update.user');

Route::get('delete-user/{user_id}', [frontEndController::class, 'delete'])->name('delete.user');
//this route include pages also
Route::group(['prefix' => 'pages', 'namespace' => 'Frontend'], function () {
    Route::get('aboutUs', [frontEndController::class, 'aboutUs'])->name('about');
    Route::get('contactUs', [frontEndController::class, 'contactUs'])->name('contact');
    Route::get('products', [frontEndController::class, 'products'])->name('products');
    //adduser
    // Route::get('users', [frontEndController::class, 'users'])->name('users');

});

Route::get('class-search', [frontEndController::class, 'search'])->name('search');
Route::get('class-result', [frontEndController::class, 'result'])->name('result');
Route::post('class-result', [frontEndController::class, 'classResult'])->name('class.result');
