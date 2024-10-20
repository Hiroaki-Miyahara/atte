<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController as AuthAuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisterController as AuthRegisterController;
use App\Http\Controllers\Auth\RegisteredUserController as AuthRegisteredUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisteredUserController as ControllersRegisteredUserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Http\Controllers\RegisteredUserController as HttpControllersRegisteredUserController;
use App\Http\Controllers\WorkTimeController;
use App\Http\Controllers\BreakTimeController;
use App\Http\Controllers\AttendanceController;
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
Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'stamp'])->name('stamp');
});

Route::post('/register', [RegisterController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/login', [LoginController::class, 'store']);
Route::post('/login', [LoginController::class, 'destroy']);
Route::get('/attendance', [AttendanceController::class, 'attendance']);

Route::post('/work_start_time',[WorkTimeController::class, 'work_start_time'])->name('workin');
Route::post('/work_end_time',[WorkTimeController::class, 'work_end_time'])->name('workout');
Route::post('/break_start_time',[BreakTimeController::class, 'break_start_time'])->name('breakin');
Route::post('/break_end_time',[BreakTimeController::class, 'break_end_time'])->name('breakout');

Auth::routes();

