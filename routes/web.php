<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SubSubCategoryController;
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
        Route::get('/admin/editsubcategory/{id}', 'EditSubCategory')->name('editsubcategory');
        Route::post('/admin/updatesubcategory', 'UpdateSubCategory')->name('updatesubcategory');
        Route::get('/admin/deletesubcategory/{id}', 'DeleteSubCategory')->name('deletesubcategory');
    });

    Route::controller(SubSubCategoryController::class)->group(function () {
        Route::get('/admin/addsubsubcategory', 'AddSubSubCategory')->name('addsubsubcategory');
        Route::get('/admin/allsubsubcategory', 'AllSubSubCategory')->name('allsubsubcategory');
        Route::post('/admin/storesubsubcategory', 'StoreSubSubCategory')->name('storesubsubcategory');
        Route::get('/admin/editsubsubcategory/{id}', 'EditSubSubCategory')->name('editsubsubcategory');
        Route::post('/admin/updatesubsubcategory', 'UpdateSubSubCategory')->name('updatesubsubcategory');
        Route::get('/admin/deletesubsubcategory/{id}', 'DeleteSubSubCategory')->name('deletesubsubcategory');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/product-reviews', 'ProductReviews')->name('productreviews');
        Route::get('/admin/colors', 'Colors')->name('colors');
        Route::post('/admin/store-color', 'StoreColor')->name('storecolor');
        Route::get('/admin/edit-colors/{id}', 'EditColors')->name('editcolors');
        Route::post('/admin/updatecolor', 'UpdateColor')->name('updatecolor');
        Route::get('/admin/delete-colors/{id}', 'DeleteColors')->name('deletecolors');
        Route::get('/admin/attribute-sets', 'AttributeSets')->name('attributesets');
        Route::post('/admin/store-attribute', 'StoreAttribute')->name('storeattribute');
        Route::get('/admin/edit-attributes/{id}', 'EditAttributes')->name('editattributes');
        Route::post('/admin/update-attribute/{id}', 'UpdateAttribute')->name('updateattribute');
        Route::get('/admin/delete-attributes/{id}', 'DeleteAttributes')->name('deleteattributes');
        Route::get('/admin/attribute-values', 'AttriuteValues')->name('attributevalues');
        Route::post('/admin/store-attribute-value', 'StoreAttributeValue')->name('storeattributevalue');

    });

});
