<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admissionController;
use App\Http\Controllers\slotController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\attendanceController;
use App\Http\Controllers\dashboardController;
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

Route::get('/',[dashboardController::class,'dashboard']);

Route::get('/dashboard',[dashboardController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

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
Route::get('/view/batch/{id}',[slotController::class, 'viewBatch'])->name("view-batch");
Route::get('/student/details/{id}',[studentController::class, 'studentDetails']);
Route::get('/students/list',[studentController::class, 'students']);
Route::get('/students/list/download',[ExportController::class, 'export']);
Route::get('/students/view/completed-students',[studentController::class, 'showCompletedStudents']);
Route::get('/students/drop-students/{id}',[studentController::class, 'dropStudent']);
Route::get('/students/view/dropped-students',[studentController::class, 'showDroppedStudents']);

Route::prefix('attendance')->group(function (){
    Route::get('batch-attendance', [attendanceController::class, 'viewBatchPage'])->name("take.attendance");
    Route::get('attendance-page/{id}', [attendanceController::class,'attendancePage'])->name("take-attendance");
    Route::post('submit/attendance', [attendanceController::class,'saveAttendance'])->name("submit-attendance");
    Route::get('view/attended-students/{id}',[attendanceController::class,'viewAttendStudent'])->name("viewAttendants");
});


require __DIR__.'/auth.php';

