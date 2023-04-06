<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Tweet\tweetController;


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

// memo
// GET メソッドは、データの要求をするもの。
// POST メソッドは、データの追加(修正)を要求するもの。
// GET メソッドと POST メソッドでの用途が明確に違う。
// データの修正や追加などを行うときには GET メソッドではなくて POST メソッドを使う。

Route::get('/index',[tweetController::class, 'index'])->name('tweetIndex');
Route::post('/create',[tweetController::class, 'create'])->name('tweetCreate');
Route::get('/{tweetId}/tweetEdit',[tweetController::class,'edit'])->name('tweetEdit');
Route::post('/{tweetId}',[tweetController::class,'update'])->name('tweetUpdate');
Route::post('/{tweetId}/destroy',[tweetController::class, 'destroy'])->name('tweetDestroy');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
