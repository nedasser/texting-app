<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Auth::routes(['verify' => true]);

//Route::get('/home', [HomeController::class, 'index'])->name('home');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/conv', [UserController::class, 'conversations'])->name('user.conv');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/messages', [AdminController::class, 'messages'])->name('admin.messages');
    Route::get('/admin/pdf', [AdminController::class, 'createPDF'])->name('admin.pdf');
    Route::delete('/admin/{user}', [AdminController::class, 'userDelete'])->name('admin.userDelete');
    Route::get('/admin/{user}/edit', [AdminController::class, 'userEdit'])->name('admin.userEdit');
    Route::put('/admin/{user}', [AdminController::class, 'userUpdate'])->name('admin.userUpdate');
    //Route::resource('users', UserController::class);
});


