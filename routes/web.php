<?php

use App\Http\Controllers\Admin\EditSectionController;
use App\Http\Controllers\ProfileController;
use App\Models\SectionProfile;
use App\Models\Social;
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
    $socials = Social::all();
    $sectionprofiles = SectionProfile::all();
    return view('index', [
        'title' => 'Home',
        'socials' => $socials,
        'sectionprofiles' => $sectionprofiles,
    ]);
})->name('index');


// profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->name('admin.')->prefix('admin')->group(function(){
    Route::get('/dashboard', function () { return view('admin.dashboard');})->name('dashboard');

    Route::name('edit-section.')->prefix('edit-section')->group(function(){
        Route::get('aboutme', [EditSectionController::class, 'aboutme'])->name('aboutme');
        Route::patch('updateaboutme/{id}', [EditSectionController::class, 'updateaboutme'])->name('aboutme.update');
    });

    // Exclude 'edit-section' route from Route::resource()
    Route::resource('edit-section', EditSectionController::class)->except(['show']);
});




require __DIR__.'/auth.php';
