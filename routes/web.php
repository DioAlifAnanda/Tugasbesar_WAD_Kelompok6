<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminBookingController;
use App\Http\Controllers\AdminMedicineController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicineController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

/* ->middleware(['auth', 'verified']) */

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/medicine', [MedicineController::class, 'search'])->name('medicine');

Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin');

    Route::get('/admin/user', [AdminUserController::class, 'index'])->name('admin.user');

    Route::get('/admin/booking', [AdminBookingController::class, 'index'])->name('admin.booking');
    Route::patch('/admin/booking/{id}', [AdminBookingController::class, 'update'])->name('admin.booking.update');
    
    Route::get('/admin/schedule', function () {
        return view('admin.schedule');
    })->name('admin.schedule');
    
    Route::get('/admin/medicine', [AdminMedicineController::class, 'index'])->name('admin.medicine');
    
    Route::get('/admin/article', function () {
        return view('admin.article');
    })->name('admin.article');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
