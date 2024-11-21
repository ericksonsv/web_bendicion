<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('portada');

// MINISTERIOS BENDICIÓN ROUTES

Route::prefix('ministerios-bendicion')->group(function () {
    Route::view('/', 'frontend.mb.pages.inicio')->name('mb.inicio');
    Route::view('sobre-nosotros', 'frontend.mb.pages.sobre-nosotros')->name('mb.sobre-nosotros');
    Route::prefix('sobre-nosotros')->group(function () {
        Route::view('declaracion-doctrinal', 'frontend.mb.pages.declaracion-doctrinal')->name('mb.declaracion-doctrinal');
    });
    Route::view('fundacion-educativa-bendicion', 'frontend.mb.pages.fundacion-educativa-bendicion')->name('mb.fundacion-educativa-bendicion');
    Route::view('agua-bendicion', 'frontend.mb.pages.agua-bendicion')->name('mb.agua-bendicion');
    Route::view('equipo-paulino', 'frontend.mb.pages.equipo-paulino')->name('mb.equipo-paulino');
    Route::view('red-iglesias', 'frontend.mb.pages.red-iglesias')->name('mb.red-iglesias');
    Route::view('contacto', 'frontend.mb.pages.contacto')->name('mb.contactos');
});

// RED BENDICIÓN ROUTES

Route::prefix('red-bendicion')->group(function () {
    Route::view('/', 'frontend.rb.pages.inicio')->name('rb.inicio');
    Route::view('sobre-nosotros', 'frontend.rb.pages.sobre-nosotros')->name('rb.sobre-nosotros');
    Route::prefix('sobre-nosotros')->group(function () {
        Route::view('declaracion-doctrinal', 'frontend.rb.pages.declaracion-doctrinal')->name('rb.declaracion-doctrinal');
    });
    Route::view('equipo-paulino', 'frontend.rb.pages.equipo-paulino')->name('rb.equipo-paulino');
    Route::view('proyectos', 'frontend.rb.pages.proyectos')->name('rb.proyectos');
    Route::view('red-iglesias', 'frontend.rb.pages.red-iglesias')->name('rb.red-iglesias');
    Route::view('contacto', 'frontend.rb.pages.contacto')->name('rb.contactos');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/dashboard/link-category/{id}', [DashboardController::class, 'links'])
    ->middleware(['auth', 'verified'])
    ->name('links');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
