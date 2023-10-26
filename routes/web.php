<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
    return view('items.index');
});

Route::get('/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/', [ItemController::class, 'store'])->name('items.store');
Route::get('/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');
Route::patch('/{item}', [ItemController::class, 'update'])->name('items.update');
Route::delete('/{item}', [ItemController::class, 'destroy'])->name('items.destroy');
