<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

Route::get('/cc', function () {
    return view('mails.rejected-payment');
});

Route::post('/get-cities', [RegisteredUserController::class, 'getCities'])->name('get.cities');
Route::post('/get-districts', [RegisteredUserController::class, 'getDistricts'])->name('get.districts');

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/dashboard/admins', [AdminController::class, 'index'])->name('dashboard-admin');
    Route::get('/dashboard/admin/users', [AdminController::class, 'users'])->name('dashboard-admin-users');
    Route::get('/detail/users/{name}', [AdminController::class, 'detailUsers'])->name('detail-users');
    Route::get('/order-list/admin', [AdminController::class, 'orderList'])->name('order-list-admin');
    Route::post('/logout/admin', [AuthenticatedSessionController::class, 'logoutAdmin'])->name('logout-admin');
});

Route::middleware(['auth:superadmin', 'verified'])->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/users', [AdminController::class, 'users'])->name('dashboard-users');
    Route::get('/detail/users/{name}', [AdminController::class, 'detailUsers'])->name('detail-users');
    Route::get('/dashboard/panel/admin', [AdminController::class, 'admin'])->name('dashboard-panel');
    Route::post('/admin/update-status/{id}', [AdminController::class, 'updateStatus'])->name('update-admin');
    Route::get('/pricing-class', [AdminController::class, 'pricingClass'])->name('pricing-class');
    Route::get('/show-arhive-class', [AdminController::class, 'showArchiveClass'])->name('show-archive-class');
    Route::post('/archive-class/{id}', [AdminController::class, 'archiveClass'])->name('archive');
    Route::get('/form-class', [AdminController::class, 'formClass'])->name('form-class');
    Route::post('/store-class', [AdminController::class, 'storeClass'])->name('store-class');
    Route::get('/order-list', [AdminController::class, 'orderList'])->name('order-list');
    Route::get('/ticket-list', [AdminController::class, 'ticketList'])->name('ticket-list');
    Route::get('/order-detail/{id}', [AdminController::class, 'orderDetail'])->name('order-detail');
    Route::post('/edit-payment/{id}', [AdminController::class, 'editPayment'])->name('edit-payment');
    Route::post('/edit-user/{id}', [AdminController::class, 'editUser'])->name('update-user');
    Route::post('/rejected-payment/{id}', [AdminController::class, 'rejectedPayment'])->name('rejected-payment');
    Route::post('/generate-again/{id}', [AdminController::class, 'generateTicketAgain'])->name('generate-again');
    Route::post('/validate-ticket/{id}', [AdminController::class, 'validateTicket'])->name('validate-ticket');
    Route::post('/logout/superadmin', [AuthenticatedSessionController::class, 'logoutSuperadmin'])->name('logout-superadmin');
});

Route::middleware(['auth:web', 'verified'])->group(function () {
    Route::get('/dashboard/user', [UserController::class, 'index'])->name('dashboad-user');
    Route::get('/class', [UserController::class, 'class'])->name('class');
    Route::post('/submit-payment/{id}', [UserController::class, 'submitPayment'])->name('submit-payment');
    Route::post('/home-submit-payment/{id}', [UserController::class, 'homeSubmitPayment'])->name('home-submit-payment');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/order', [UserController::class, 'order'])->name('order');
    Route::get('/generate-ticket/{id}', [UserController::class, 'generateTicket'])->name('ticket-generate');
    Route::get('/check-ticket-status', [UserController::class, 'checkTicketStatus'])->name('check-ticket-status');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
