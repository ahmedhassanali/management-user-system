<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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



Auth::routes();


// //editor Routs
Route::middleware(['auth'])->group(function () {

    Route::view('', 'dashboard.admin')->name('admin');
    Route::resource('roles', RoleController::class)->except('show');
    Route::resource('users', UserController::class);

    // Route::middleware('userRole:admin')->group(function () {
    //     Route::resource('roles',RoleController::class);
    //     Route::resource('users',UserController::class);
    // });

});
