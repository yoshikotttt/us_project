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


    Route::get('/skyway', [MedicalExamController::class, 'showLatest'])->name('skyway');

    Route::get('/search', [UserController::class, 'index'])->name('search');
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
    })->name('detail');

    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::get('/skyway', function () {
        return view('skyway');
    })->name('skyway');

});

require __DIR__ . '/auth.php';


















//本：ダッシュボード表示(books.blade.php)
// Route::get('/', [BookController::class, 'index'])->middleware(['auth'])->name('book_index');
// Route::get('/dashboard', [BookController::class, 'index'])->middleware(['auth'])->name('dashboard');

// //本：追加 
// Route::post('/books', [BookController::class, "store"])->name('book_store');

// //本：削除 
// Route::delete('/book/{book}', [BookController::class, "destroy"])->name('book_destroy');

// //本：更新画面
// Route::post('/booksedit/{book}', [BookController::class, "edit"])->name('book_edit'); //通常
// Route::get('/booksedit/{book}', [BookController::class, "edit"])->name('edit');      //Validationエラーありの場合

// //本：更新画面
// Route::post('/books/update', [BookController::class, "update"])->name('book_update');

/**
 * 「ログイン機能」インストールで追加されています 
 */
