<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/privacy-policy', function () {
    return Inertia::render('Footer/PrivacyPolicy');
})->name('privacy-policy');

Route::get('/contact', function () {
    return Inertia::render('Footer/Contact');
})->name('contact');


Route::post('/change-locale', function (Request $request) {
    $validLocales = ['en', 'ru', 'ar'];
    
    if (in_array($request->locale, $validLocales)) {
        session(['locale' => $request->locale]);
        return response()->json(['success' => true]);
    }
    
    return response()->json(['success' => false], 400);
})->middleware('web');



require __DIR__.'/auth.php';
