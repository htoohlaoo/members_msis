<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MemberController::class, 'index'])->name('members.index');
