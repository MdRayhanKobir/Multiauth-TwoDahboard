<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Usermain\UsermainController;

// User all Route
Route::get('/user/logout',[UsermainController::class,'Logout'])->name('user.logout');
Route::get('/user/profile',[UsermainController::class,'UserProfile'])->name('user.profile');
Route::get('/user/edit_profile',[UsermainController::class,'UserEditProfile'])->name('user.edit_profile');
Route::post('/user/update/store',[UsermainController::class,'UserupdateProfile'])->name('user.update');


// Admin logout Route
Route::get('/admin/logout',[AdminController::class,'destroy'])->name('admin.logout');


















Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});



Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('user.index');
})->name('dashboard');
