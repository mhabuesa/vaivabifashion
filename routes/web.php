<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(('auth'))->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('admindashboard');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/addcategory', 'Addcategory')->name('addcategory');
        Route::post('/admin/storecategory', 'Storecategory')->name('storecategory');
        Route::get('/admin/allcategory', 'Allcategory')->name('allcategory');
        Route::get('/admin/editcategory/{id}', 'Editcategory')->name('editcategory');
        Route::post('/admin/updatecategory', 'Updatecategory')->name('updatecategory');
        Route::get('/admin/deletecategory/{id}', 'Deletecategory')->name('deletecategory');
    });

    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/admin/addsubcategory', 'AddSubCategory')->name('addsubcategory');
        Route::get('/admin/allsubcategory', 'AllSubCategory')->name('allsubcategory');
        Route::post('/admin/storesubcategory', 'StoreSubCategory')->name('storesubcategory');
    });




});
