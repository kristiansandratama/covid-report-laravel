<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/print', [DashboardController::class, 'print'])->name('dashboard.print');
Route::get('/dashboard/export', [DashboardController::class, 'export'])->name('dashboard.export');
Route::get('/dashboard/import', [DashboardController::class, 'import'])->name('dashboard.import');
Route::post('/dashboard/store', [DashboardController::class, 'store'])->name('dashboard.store');
