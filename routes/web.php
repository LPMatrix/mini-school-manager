<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/attendance', [HomeController::class, 'attendance'])->name('attendance');
Route::get('/student/create', [HomeController::class, 'create'])->name('create_student_view');
Route::post('/student/store', [HomeController::class, 'store'])->name('store_student');
Route::delete('/student/delete/{student}', [HomeController::class, 'deleteUser'])->name('delete_student');
Route::get('/student/edit/{student}', [HomeController::class, 'editUser'])->name('edit_student');
Route::put('/student/update/{student}', [HomeController::class, 'updateUser'])->name('update_student');