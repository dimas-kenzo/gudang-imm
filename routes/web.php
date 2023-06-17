<?php

use App\Http\Controllers\LogController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Log;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/warehouse', [WarehouseController::class, 'index'])->name('warehouse.index');
Route::get('/warehouse/create', [WarehouseController::class, 'create'])->name('warehouse.create');
Route::get('/warehouse/edit/{id}', [WarehouseController::class, 'edit'])->name('warehouse.edit');
Route::get('/warehouse/show/{id}', [WarehouseController::class, 'show'])->name('warehouse.show');
Route::post('/warehouse/update/{id}', [WarehouseController::class, 'update'])->name('warehouse.update');
Route::get('/warehouse/destroy/{id}', [WarehouseController::class, 'destroy'])->name('warehouse.destroy');
Route::post('/warehouse/store', [WarehouseController::class, 'store'])->name('warehouse.store');

Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
Route::get('/stock/create', [StockController::class, 'create'])->name('stock.create');
Route::get('/stock/edit/{id}', [StockController::class, 'edit'])->name('stock.edit');
Route::get('/stock/show/{id}', [StockController::class, 'show'])->name('stock.show');
Route::post('/stock/update/{id}', [StockController::class, 'update'])->name('stock.update');
Route::get('/stock/destroy/{id}', [StockController::class, 'destroy'])->name('stock.destroy');
Route::post('/stock/store', [StockController::class, 'store'])->name('stock.store');

Route::get('/log', [LogController::class, 'index'])->name('log.index');
