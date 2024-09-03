<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/ticket', function () {
    return view('ticket');
});

Route::post('/get-cities', [RegisteredUserController::class, 'getCities'])->name('get.cities');
Route::post('/get-districts', [RegisteredUserController::class, 'getDistricts'])->name('get.districts');

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard-admin');
    Route::get('/dashboard/users', [AdminController::class, 'users'])->name('dashboard-users');
    Route::post('/logout/admin', [AuthenticatedSessionController::class, 'logoutAdmin'])->name('logout-admin');
});

Route::middleware(['auth:superadmin', 'verified'])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard-superadmin');
    Route::get('/dashboard/users', [AdminController::class, 'users'])->name('dashboard-users');
    Route::get('/detail/users/{name}', [AdminController::class, 'detailUsers'])->name('detail-users');
    Route::get('/dashboard/panel/admin', [AdminController::class, 'admin'])->name('dashboard-panel');
    Route::post('/admin/update-status/{id}', [AdminController::class, 'updateStatus'])->name('update-admin');
    Route::get('/pricing-class', [AdminController::class, 'pricingClass'])->name('pricing-class');
    Route::get('/form-class', [AdminController::class, 'formClass'])->name('form-class');
    Route::post('/store-class', [AdminController::class, 'storeClass'])->name('store-class');
    Route::get('/order-list', [AdminController::class, 'orderList'])->name('order-list');
    Route::get('/order-detail/{id}', [AdminController::class, 'orderDetail'])->name('order-detail');
    Route::post('/logout/superadmin', [AuthenticatedSessionController::class, 'logoutAdmin'])->name('logout-superadmin');
});

Route::middleware(['auth:web', 'verified'])->group(function () {
    Route::get('/dashboard/user', [UserController::class, 'index'])->name('dashboad-user');
    Route::get('/class', [UserController::class, 'class'])->name('class');
    Route::post('/submit-payment/{id}', [UserController::class, 'submitPayment'])->name('submit-payment');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
