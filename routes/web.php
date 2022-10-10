<?php

use App\Http\Controllers\SQLController;
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

Route::get('users', [SQLController::class, 'index'])->name('users.index');
Route::get('users/create', [SQLController::class, 'create'])->name('users.create');
Route::post('users', [SQLController::class, 'store'])->name('users.store');
Route::get('users/edit/{id}', [SQLController::class, 'edit'])->name('users.edit');
Route::put('users/{id}', [SQLController::class, 'update'])->name('users.update');
