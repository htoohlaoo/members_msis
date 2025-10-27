<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MemberController::class, 'index'])->name('home');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','role:user'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/member', [MemberController::class, 'create'])->name('members.create');
    Route::post('/member/byadmin', [MemberController::class, 'subscribeAndRegister'])->name('members.subscribeByAdmin');
    Route::post('/member', [MemberController::class, 'subscribe'])->name('members.subscribe');
    Route::get('/members/{id}', [MemberController::class, 'edit'])->name('members.update');
    Route::put('/members/{id}', [MemberController::class, 'update'])->name('members.update');
    Route::delete('/members/{id}', [MemberController::class, 'dismiss'])->name('members.dismiss');
});

require __DIR__.'/auth.php';
