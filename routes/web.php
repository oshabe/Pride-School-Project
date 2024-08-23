<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'welcome']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Student/{id}', [StudentController::class, 'index']);
//class
Route::get('/Class/{id}', [StudentController::class, 'oneClass']);
//search
Route::get('/search-students', [StudentController::class, 'searchStudents']);

Route::post('/year/store', [StudentController::class, 'saveCreatedYear'])->name('year.store');
Route::post('/term/store', [StudentController::class, 'saveCreatedTerm'])->name('term.store');
Route::post('/student/store', [StudentController::class, 'saveCreatedStudent'])->name('student.store');
Route::post('/payment/store', [StudentController::class, 'saveCreatedPayment'])->name('payment.store');

Route::get('/check/term', [StudentController::class, 'checkTermYear']);



