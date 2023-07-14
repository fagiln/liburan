<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WargaController;
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
Route::middleware('auth')->group(function(){
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login')->withoutMiddleware('auth');
    Route::post('login', [AuthController::class, 'login'])->withoutMiddleware('auth');
    Route::resource('warga', WargaController::class);
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register')->withoutMiddleware('auth');
    Route::post('register', [AuthController::class, 'register'])->withoutMiddleware('auth');
    Route::get('dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');

});
Route::get('logout', [AuthController::class, 'logout']);

// Route::get('/login', function () {
//     return view('auth.login');
// });