<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DigitalCSController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;


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
})->name('login-custom'); 

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/getBranchName', [BranchController::class, 'getBranchName']);
Route::get('/getBranchCodes', [BranchController::class, 'getBranchCodes']);


Route::prefix('/digital-cs')->group(function () {
    Route::get('/', [DigitalCSController::class, 'index'])->name('digital-cs.index');
    Route::get('/create', [DigitalCSController::class, 'create'])->name('digital-cs.create');
    Route::post('/store', [DigitalCSController::class, 'store'])->name('digital-cs.store');
    Route::get('/edit/{id}', [DigitalCSController::class, 'edit'])->name('digital-cs.edit');
    Route::post('/update/{id}', [DigitalCSController::class, 'update'])->name('digital-cs.update');
    Route::get('/delete/{id}', [DigitalCSController::class, 'destroy'])->name('digital-cs.destroy');
});






require __DIR__.'/auth.php';
