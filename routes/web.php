<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
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
});


Route::get('/vendor/login', [VendorController::class , 'create']);
Route::post('/vendor/login', [VendorController::class , 'store']);
Route::middleware('role:vendor')->group(function(){
Route::get('/vendor/dashboard', [VendorController::class , 'index']);
Route::get('/vendor/profile', [VendorController::class , 'ViewvendorProfile']);
Route::post('/vendor/profile', [VendorController::class , 'UpdatevendorProfile']);
Route::get('/vendor/updatePassword', [VendorController::class , 'ViewPassword']);
Route::post('/vendor/updatepassword', [VendorController::class , 'UpdatePassword']);
});


require __DIR__.'/auth.php';
