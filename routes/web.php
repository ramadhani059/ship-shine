<?php

use App\Http\Controllers\Admin\CatalogAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\DataUserController;
use App\Http\Controllers\Admin\ListOrderController;
use App\Http\Controllers\Consumen\DashboardConsumenController;
use App\Http\Controllers\Consumen\DestinasiConsumenController;
use App\Http\Controllers\Consumen\HistoryConsumenController;
use App\Http\Controllers\Consumen\InfoController;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', 'login');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // For Admin
    Route::middleware(['is_admin'])->group(function () {
        Route::resource('dashboard-admin', DashboardAdminController::class);
        Route::resource('catalog-admin', CatalogAdminController::class);
        Route::resource('list-order', ListOrderController::class);
        Route::resource('data-user', DataUserController::class);
    });

    // For Consumen
    Route::middleware(['is_consumen'])->group(function () {
        Route::resource('dashboard-consumen', DashboardConsumenController::class);
        Route::resource('destinasi-consumen', DestinasiConsumenController::class);
        Route::resource('history-consumen', HistoryConsumenController::class);
        Route::resource('info-consumen', InfoController::class);
    });
});

