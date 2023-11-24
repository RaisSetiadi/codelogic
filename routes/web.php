<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ViewController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// User Page Start
Route::get('/', [ViewController::class, 'index'])->name('users.index');
Route::get('/laravel', [ViewController::class, 'laravel'])->name('users.laravel');
Route::get('/java', [ViewController::class, 'java'])->name('users.java');
Route::get('/javascript', [ViewController::class, 'javascript'])->name('users.javascript');
Route::get('/react', [ViewController::class, 'react'])->name('users.react');
Route::get('/bootstrap', [ViewController::class, 'bootstrap'])->name('bootstrap.page');
Route::get('/flutter', [ViewController::class, 'flutter'])->name('users.flutter');
// User Page End

Route::resource('/posts', PostController::class)->middleware(['auth', 'verified']);

// detail page from users 
Route::get('/detailLaravel/{id}', [DetailController::class, 'laravel'])->name('detail.laravel');
Route::get('/detailJava/{id}', [DetailController::class, 'java'])->name('detail.java');
Route::get('/detailJavaScript/{id}', [DetailController::class, 'javascript'])->name('detail.javascript');
Route::get('/detailreact/{id}', [DetailController::class, 'react'])->name('detail.react');
Route::get('/detailbootstrap/{id}', [DetailController::class, 'bootstrap'])->name('detail.bootstrap');
Route::get('/detailFlutter/{id}', [DetailController::class, 'flutter'])->name('detail.flutter');
// end detail page