<?php

use App\Http\Controllers\EditSection\AboutmeController;
use App\Http\Controllers\EditSection\HeroController;
use App\Http\Controllers\ProfileController;
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
    return view('index', [
        'title' => 'Home',
    ]);
});


// profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin routes
Route::middleware('auth', 'verified')->name('admin.')->prefix('admin')->group(function(){
    Route::get('/dashboard', function () { return view('admin.dashboard');})->name('dashboard');
    Route::get('/edit-section', function () { return view('admin.edit-section');})->name('edit-section');
});

// edit section routes
Route::middleware('auth', 'verified')->name('admin.edit-section.')->prefix('admin/edit-section')->group(function(){
    Route::resource('hero', HeroController::class, [
        'names' => [
            'index' => 'hero.index'
        ]
    ]);
    Route::resource('aboutme', AboutmeController::class, [
        'names' => [
            'index' => 'aboutme.index'
        ]
    ]);
});

require __DIR__.'/auth.php';
