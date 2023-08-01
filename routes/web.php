<?php

use App\Http\Controllers\Admin\EditSectionController;
use App\Http\Controllers\ProfileController;
use App\Models\Portofolio;
use App\Models\SectionProfile;
use App\Models\Skill;
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

// Index Route (Landing Page)
Route::get('/', function () {
    $socials = Social::all();
    $sectionprofiles = SectionProfile::all();
    $skills = Skill::all();
    $column1skills = $skills->chunk(ceil($skills->count() / 2))->first(); //split skills data into two array
    $column2skills = $skills->chunk(ceil($skills->count() / 2))->last();
    $portofolio = Portofolio::all();
    return view('index', [
        'title' => 'Home',
        'socials' => $socials,
        'sectionprofiles' => $sectionprofiles,
        'column1skills' => $column1skills,
        'column2skills' => $column2skills,
        'portofolio' => $portofolio,
    ]);
})->name('index');

Route::post('/send-email', [EditSectionController::class, 'sendemail'])->name('send.email');

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
        Route::get('skills', [EditSectionController::class, 'skills'])->name('skills');
        Route::get('skills/create', [EditSectionController::class, 'createskills'])->name('skills.create');
        Route::post('skills/create-proses', [EditSectionController::class, 'storeskills'])->name('skills.store');
        Route::delete('skills/{id}', [EditSectionController::class, 'destroyskills'])->name('skills.destroy');
        Route::get('portofolio', [EditSectionController::class, 'portofolio'])->name('portofolio');
        Route::get('portofolio/create', [EditSectionController::class, 'createportofolio'])->name('portofolio.create');
        Route::post('portofolio/create-proses', [EditSectionController::class, 'storeportofolio'])->name('portofolio.store');
        Route::delete('portofolio/{id}', [EditSectionController::class, 'destroyportofolio'])->name('portofolio.destroy');
    });

    // Exclude 'edit-section' route from Route::resource()
    Route::resource('edit-section', EditSectionController::class)->except(['show']);
});




require __DIR__.'/auth.php';
