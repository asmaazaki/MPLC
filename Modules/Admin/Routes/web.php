<?php

use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\AdminAuthController;
use Modules\Admin\Http\Controllers\DashboardController;



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


Route::group(
    [

        'middleware' => [ 'auth:admin' ]


    ],
     function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin-panel');
    Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('admin-logout');

    Route::get('admins/index',[AdminController::class,'index'])->name('admin.index');
    Route::get('admin/sync/permission/{id}',[AdminController::class,'permission'])->name('permission');
    Route::post('admin/sync/permission/{id}',[AdminController::class,'SyncPermission'])->name('SyncPermission');
    Route::get('admins/create',[AdminController::class,'create'])->name('admin.create');
    Route::post('admins/create',[AdminController::class,'store'])->name('admin.store');
    Route::get('admins/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
    Route::post('admins/edit/{id}',[AdminController::class,'update'])->name('admin.update');
    Route::post('admins/destroy/{id}',[AdminController::class,'destroy'])->name('admin.destroy');

});

Route::post('/login-admin', [AdminAuthController::class, 'login'])->name('admin-login');
Route::get('/admin/login', [AdminAuthController::class, 'loginForm'])->name('admin-login-form');