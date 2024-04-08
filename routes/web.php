<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get("/", [PostController::class,"news"])->name("news");


Route::get('/dashboard', function () {
    // return view('index');
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('posts', PostController::class);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

/////////////////////////////CRUD//////////////////////////////////////////////////////////////////////
// Route::get('/posts',[PostController::class,'index'])->name('index');

// Route::post('post',[PostController::class,'store']);
Route::get('show/{id}',[PostController::class,'show']);
// Route::get('show_detail/{id}',[PostController::class,'show_detail']);
Route::get('edit/{id}',[PostController::class,'edit']);
Route::post('update/{id}',[PostController::class,'update']);
Route::get('delete/{id}',[PostController::class,'destroy']);


