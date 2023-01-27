<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Admin Routes
Route::prefix('admin')->middleware('role:admin')->group(function() {
    Route::get('/home', [HomeController::class, 'admin_home'])->name('admin.home');

    // Poll Routes
    Route::resource('polls', PollController::class)->except(['index', 'show']);
});

// User Routes
Route::prefix('user')->middleware('role:user')->group(function() {
    Route::get('/home', [HomeController::class, 'user_home'])->name('user.home');
});

// Admin/User Shared Routes
Route::middleware('role:admin,user')->group(function() {
    // Poll Index/Show
    Route::get('/polls', [PollController::class, 'index'])->name('polls.index');
    Route::get('/polls/{poll}', [PollController::class, 'show'])->name('polls.show');
});
