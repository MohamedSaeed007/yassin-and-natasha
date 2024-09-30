<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/guest-book', [\App\Http\Controllers\GuestBookMessageController::class, 'store']);
