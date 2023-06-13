<?php

use App\Http\Controllers\WarehouseController;
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
Route::post('/warehouse/update/{id}', [WarehouseController::class, 'update'])->name('warehouse.update');
Route::get('/warehouse/destroy/{id}', [WarehouseController::class, 'destroy'])->name('warehouse.destroy');
Route::post('/warehouse/store', [WarehouseController::class, 'store'])->name('warehouse.store');
