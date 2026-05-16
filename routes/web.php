<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IncomingGoodsController;
use App\Http\Controllers\OutgoingGoodsController;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('products', ProductController::class);

    Route::resource('incoming-goods', IncomingGoodsController::class);

    Route::resource('outgoing-goods', OutgoingGoodsController::class);

    Route::resource('suppliers', SupplierController::class);

    Route::get('/products-export-excel',
    [ProductController::class, 'exportExcel'])
    ->name('products.export.excel');

    Route::get('/products-export-pdf',
    [ProductController::class, 'exportPdf'])
    ->name('products.export.pdf');

});

require __DIR__.'/auth.php';