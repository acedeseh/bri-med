<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DigitalCSController;
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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('/digital-cs')->group(function () {
    Route::get('/', [DigitalCSController::class, 'index'])->name('digital-cs.index');
    Route::get('/create', [DigitalCSController::class, 'create'])->name('digital-cs.create');


    // Tambahkan rute lainnya di sini jika diperlukan
});





require __DIR__.'/auth.php';
