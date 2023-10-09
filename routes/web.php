<?php

use App\Http\Controllers\BookPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomePageController;
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

Route::get('/', WelcomePageController::class)->name('/');

Route::get('/books', BookPageController::class)->name('books');


Route::get('/t', function () {
    $ts = App\Models\User::all();
    return view('_t', compact('ts'));
});





/* -------------------- */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    /* Rutas protegidas por middleware personalizado */
    Route::middleware(['is.admin'])->group(function () {
        Route::get('/admin', function () {
            return ('admin');
        });
    });

    Route::middleware(['is.reader'])->group(function () {
        Route::get('/reader', function () {
            return ('reader');
        });
    });
});



require __DIR__ . '/auth.php';
