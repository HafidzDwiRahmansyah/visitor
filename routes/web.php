<?php

use App\Http\Controllers\VisitorController;
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

Route::get('/visitor', function () {
    return view('index');
});

Route::get('/', [VisitorController::class, 'index'])->name('index');
Route::post('/save', [VisitorController::class, 'store'])->name('store');
Route::post('/out/{id}', [VisitorController::class, 'out'])->name('out');
