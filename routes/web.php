<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DigitalCSController;
use App\Http\Controllers\QmsController;
use App\Http\Controllers\RcmController;
use App\Http\Controllers\SsppController;
use App\Http\Controllers\TcrController;
use App\Http\Controllers\HyosungController;
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
Route::get('/getBranchCodesAndNames', [BranchController::class, 'getBranchCodesAndNames']);

Route::prefix('/digital-cs')->group(function () {
    Route::get('/', [DigitalCSController::class, 'index'])->name('digital-cs.index');
    Route::get('/create', [DigitalCSController::class, 'create'])->name('digital-cs.create');
    Route::post('/store', [DigitalCSController::class, 'store'])->name('digital-cs.store');
    Route::get('/edit/{id}', [DigitalCSController::class, 'edit'])->name('digital-cs.edit');
    Route::patch('/update/{id}', [DigitalCSController::class, 'update'])->name('digital-cs.update');
    Route::delete('/destroy/{id}', [DigitalCSController::class, 'destroy'])->name('digital-cs.destroy');
});

Route::prefix('/tcr')->group(function () {
    Route::get('/', [TcrController::class, 'index'])->name('tcr.index');
    Route::get('/create', [TcrController::class, 'create'])->name('tcr.create');
    Route::post('/store', [TcrController::class, 'store'])->name('tcr.store');
    Route::get('/edit/{id}', [TcrController::class, 'edit'])->name('tcr.edit');
    Route::patch('/update/{id}', [TcrController::class, 'update'])->name('tcr.update');
    Route::delete('/destroy/{id}', [TcrController::class, 'destroy'])->name('tcr.destroy');
});

Route::prefix('/qms')->group(function () {
    Route::get('/', [QmsController::class, 'index'])->name('qms.index');
    Route::get('/create', [QmsController::class, 'create'])->name('qms.create');
    Route::post('/store', [QmsController::class, 'store'])->name('qms.store');
    Route::get('/edit/{id}', [QmsController::class, 'edit'])->name('qms.edit');
    Route::patch('/update/{id}', [QmsController::class, 'update'])->name('qms.update');
    Route::delete('/destroy/{id}', [QmsController::class, 'destroy'])->name('qms.destroy');
});

Route::prefix('/rcm')->group(function () {
    Route::get('/', [RcmController::class, 'index'])->name('rcm.index');
    Route::get('/create', [RcmController::class, 'create'])->name('rcm.create');
    Route::post('/store', [RcmController::class, 'store'])->name('rcm.store');
    Route::get('/edit/{id}', [RcmController::class, 'edit'])->name('rcm.edit');
    Route::patch('/update/{id}', [RcmController::class, 'update'])->name('rcm.update');
    Route::delete('/destroy/{id}', [RcmController::class, 'destroy'])->name('rcm.destroy');
});

Route::prefix('/hyosung')->group(function () {
    Route::get('/', [HyosungController::class, 'index'])->name('hyosung.index');
    Route::get('/create', [HyosungController::class, 'create'])->name('hyosung.create');
    Route::post('/store', [HyosungController::class, 'store'])->name('hyosung.store');
    Route::get('/edit/{id}', [HyosungController::class, 'edit'])->name('hyosung.edit');
    Route::patch('/update/{id}', [HyosungController::class, 'update'])->name('hyosung.update');
    Route::delete('/destroy/{id}', [HyosungController::class, 'destroy'])->name('hyosung.destroy');
});

Route::prefix('/sspp')->group(function () {
    Route::get('/', [SsppController::class, 'index'])->name('sspp.index');
    Route::get('/create', [SsppController::class, 'create'])->name('sspp.create');
    Route::post('/store', [SsppController::class, 'store'])->name('sspp.store');
    Route::get('/edit/{id}', [SsppController::class, 'edit'])->name('sspp.edit');
    Route::patch('/update/{id}', [SsppController::class, 'update'])->name('sspp.update');
    Route::delete('/destroy/{id}', [SsppController::class, 'destroy'])->name('sspp.destroy');
});

require __DIR__.'/auth.php';
