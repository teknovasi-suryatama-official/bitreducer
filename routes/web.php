<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('administrator')->middleware(['auth', 'auth.administrator'])->group(function () {
    // Route Group for Administrator
    Route::get('index', [AdministratorController::class, 'index'])->name('administrator.index');
    Route::resource('user', UserController::class);
});

Route::prefix('member')->middleware(['auth', 'auth.member'])->group(function () {
    // Route Group for Administrator
    Route::get('index', [MemberController::class, 'index'])->name('member.index');
});

Auth::routes();

Route::get('logout', function () {
    Auth::logout();
    return redirect('/');
});