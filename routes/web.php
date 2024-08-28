<?php

use App\Http\Controllers\Api\V1\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-email', [EmailController::class, 'send'])->name('email.post');
