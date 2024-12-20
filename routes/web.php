<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

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
    Route::resource('candidates', CandidateController::class);


    // Voting routes
    Route::get('vote', [VoteController::class, 'index'])->name('vote.index');
    Route::post('vote', [VoteController::class, 'store'])->name('vote.store');

    // Voting results
    Route::get('results', [VoteController::class, 'results'])->name('vote.results');
});

Route::middleware(['auth'])->group(function () {
    // Candidate routes
   
});

require __DIR__.'/auth.php';
