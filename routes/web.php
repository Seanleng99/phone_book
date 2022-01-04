<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhonebookController;

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

Route::get('/index', [PhonebookController::class, 'index'])->name('phone.index');

Route::get('/create', [PhonebookController::class, 'create'])->name('phone.create');

Route::post('/store', [PhonebookController::class, 'store'])->name('phone.store');
