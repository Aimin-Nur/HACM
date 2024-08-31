<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard-admin');
    Route::post('/logout/admin', [AuthenticatedSessionController::class, 'logoutAdmin'])->name('logout-admin');
});

Route::middleware(['auth:superadmin', 'verified'])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard-superadmin');
    Route::post('/logout/superadmin', [AuthenticatedSessionController::class, 'logoutAdmin'])->name('logout-superadmin');
});

Route::middleware(['auth:web', 'verified'])->group(function () {
    Route::get('/dashboard/user', [UserController::class, 'index'])->name('dashboad-user');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
