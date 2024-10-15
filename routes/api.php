<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/guest-book', [\App\Http\Controllers\GuestBookMessageController::class, 'store']);
Route::get('/list-guest-book-messages', [\App\Http\Controllers\GuestBookMessageController::class, 'index']);
