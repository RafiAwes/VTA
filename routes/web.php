<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admissionController;
use App\Http\Controllers\slotController;
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
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admission')->group(function () {
    Route::get('admission-form',[admissionController::class, 'admitForm'])->name('admit.form');
    Route::post('admit-student',[admissionController::class, 'admitStudent'])->name('admit');
});

Route::prefix('slots')->group(function () {
    Route::get('slots-dashboard',[slotController::class, 'showSlots'])->name("view.slots");
    Route::get('slots-make',[slotController::class, 'newSlotPage'])->name("make.slots");
    Route::post('slot-create',[slotController::class, 'createBatch'])->name("create");

});


require __DIR__.'/auth.php';

