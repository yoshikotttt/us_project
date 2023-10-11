<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; //Add
use App\Http\Controllers\BookController; //Add
use App\Http\Controllers\MedicalExamController;
use App\Http\Controllers\UserController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




    Route::resource('process', MedicalExamController::class);

    Route::post('/process', [MedicalExamController::class, 'store'])->name('process.store');
    Route::get('/process', [UserController::class, 'selectedUser'])->name('process.select');



    Route::get('/skyway', [MedicalExamController::class, 'showLatest'])->name('skyway');
    // Route::view('/skyway2', 'skyway2');
    Route::view('/skyway2', 'skyway2', ['skywayApiKey' => env('SKYWAY_API_KEY')]);


    // 下は試しです 2023.10.10.2140.//////////////////////////////////////
    Route::get('/skyway_new/{id}', [MedicalExamController::class, 'showById'])->name('skyway_new');
    // 上まで試しです///////////////////////////////////////////////////////

    Route::get('/search/{type}', [UserController::class, 'index'])->name('search');
    Route::get('/form-detail', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/form-detail', [UserController::class, 'update'])->name('user.update');

    // 仮ルート
    Route::get('/data-form', function () {
        return view('data-form');
    });

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/form-detail', function () {
        return view('form-detail');
    })->name('form-detail');

    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::get('/skyway', function () {
        return view('skyway');
    })->name('skyway');
});

require __DIR__ . '/auth.php';
