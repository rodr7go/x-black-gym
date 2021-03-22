<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/theme', function() {
    return public_path('theme.index');
})->name('theme');

Route::resource('/users', UserController::class);
Route::resource('/payments', PaymentController::class);
Route::resource('/costs', CostController::class);
Route::resource('/attendances', AttendanceController::class);

Route::get('/users/add/attendances/{user}', [AttendanceController::class, 'addAttendance'])->name('user.add.attendance');
Route::get('/users/expiration/date', [UserController::class, 'expirationDate'])->name('users.expiration');
