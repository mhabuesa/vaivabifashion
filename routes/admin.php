<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;


Route::middleware(('auth'))->group(function () {

Route::get('/dashboard',[HomeController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/profile',[ProfileController::class, 'profile'])->middleware(['auth', 'verified'])->name('profile');
Route::get('/profile/setting',[ProfileController::class, 'profile_setting'])->middleware(['auth', 'verified'])->name('profile.setting');
Route::post('/profile/setting/update',[ProfileController::class, 'profile_setting_update'])->middleware(['auth', 'verified'])->name('profile.settings.update');
Route::get('/profile/security',[ProfileController::class, 'profile_security'])->middleware(['auth', 'verified'])->name('profile.security');
Route::post('/profile/security/update',[ProfileController::class, 'profile_security_update'])->middleware(['auth', 'verified'])->name('profile.security.update');

// Setting
Route::get('info_setting', [SettingController::class, 'info_setting'])->middleware('auth', 'verified')->name('info.setting');
Route::post('info_setting_update', [SettingController::class, 'info_setting_update'])->middleware('auth', 'verified')->name('info.setting.update');

// Category

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/addCategory', 'addCategory')->name('addCategory');
        Route::post('/categoryStore', 'categoryStore')->name('categoryStore');
        Route::get('/allCategory', 'allCategory')->name('allCategory');
        Route::get('/editCategory/{id}', 'editCategory')->name('editCategory');
        Route::post('/updateCategory', 'updateCategory')->name('updateCategory');
        Route::get('/deleteCategory/{id}', 'deleteCategory')->name('deleteCategory');
        Route::get('/trash', 'trash')->name('trash');
        Route::get('/catRestore/{id}', 'catRestore')->name('catRestore');
        Route::get('/catPerDelete/{id}', 'catPerDelete')->name('catPerDelete');
    });

    

});