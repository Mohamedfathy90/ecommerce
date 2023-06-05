<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubcategoryController;
use App\Models\Category;
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
    return view('front.homepage');
});

Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/admin/login', [AdminController::class , 'create']);
Route::post('/admin/login', [AdminController::class , 'store']);

Route::middleware('role:admin')->group(function(){
Route::get('/admin/dashboard', [AdminController::class , 'index']);
Route::get('/admin/profile', [AdminController::class , 'ViewAdminProfile']);
Route::post('/admin/profile', [AdminController::class , 'UpdateAdminProfile']);
Route::get('/admin/updatePassword', [AdminController::class , 'ViewPassword']);
Route::post('/admin/updatepassword', [AdminController::class , 'UpdatePassword']);
Route::get('/admin/active-vendors', [AdminController::class , 'activevendors']);
Route::get('/admin/inactive-vendors', [AdminController::class , 'inactivevendors']);
Route::get('/admin/vendordetails/{vendor}', [AdminController::class , 'vendordetails']);
Route::post('/admin/updatevendorstatus/{vendor}', [AdminController::class , 'updatevendorstatus']);

Route::get('/all-brands', [BrandController::class , 'index' ]);
Route::get('/add-brand', [BrandController::class , 'create' ]);
Route::post('/add-brand', [BrandController::class , 'store' ]);
Route::get('/edit-brand/{brand}', [BrandController::class , 'show' ]);
Route::patch('/edit-brand/{brand}', [BrandController::class , 'update' ]);
Route::delete('/delete-brand/{brand}', [BrandController::class , 'destroy' ])->name('brand.delete');

Route::get('/all-categories', [CategoryController::class , 'index' ]);
Route::get('/add-category', [CategoryController::class , 'create' ]);
Route::post('/add-category', [CategoryController::class , 'store' ]);
Route::get('/edit-category/{category}', [CategoryController::class , 'show' ]);
Route::patch('/edit-category/{category}', [CategoryController::class , 'update' ]);
Route::delete('/delete-category/{category}', [CategoryController::class , 'destroy' ])->name('category.delete');

Route::get('/all-subcategories', [SubcategoryController::class , 'index' ]);
Route::get('/add-subcategory', [SubcategoryController::class , 'create' ]);
Route::post('/add-subcategory', [SubcategoryController::class , 'store' ]);
Route::get('/edit-subcategory/{subcategory}', [SubcategoryController::class , 'show' ]);
Route::patch('/edit-subcategory/{subcategory}', [SubcategoryController::class , 'update' ]);
Route::delete('/delete-subcategory/{subcategory}', [SubcategoryController::class , 'destroy' ])->name('subcategory.delete');
Route::get('/get-subcategories/{category}', [SubcategoryController::class , 'getsubcategories' ]);

Route::get('/all-products', [ProductController::class , 'index' ]);
Route::get('/add-product', [ProductController::class , 'create' ]);
Route::post('/add-product', [ProductController::class , 'store' ]);
Route::get('/edit-product/{product}', [ProductController::class , 'show' ]);
Route::patch('/edit-product/{product}', [ProductController::class , 'update' ]);
Route::delete('/delete-product/{product}', [ProductController::class , 'destroy' ])->name('product.delete');

});


Route::get('/vendor/register', [VendorController::class , 'create']);
Route::post('/vendor/register', [VendorController::class , 'store']);
Route::get('/vendor/login', [VendorController::class , 'loginpage']);
Route::post('/vendor/login', [VendorController::class , 'loginrequest']);
Route::middleware('role:vendor')->group(function(){
Route::get('/vendor/dashboard', [VendorController::class , 'index']);
Route::get('/vendor/profile', [VendorController::class , 'ViewvendorProfile']);
Route::post('/vendor/profile', [VendorController::class , 'UpdatevendorProfile']);
Route::get('/vendor/updatePassword', [VendorController::class , 'ViewPassword']);
Route::post('/vendor/updatepassword', [VendorController::class , 'UpdatePassword']);
});


require __DIR__.'/auth.php';
