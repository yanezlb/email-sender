<?php

use App\Http\Controllers\Api\V1\EmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('V1')->group(function(){
    Route::post('/send-email', [EmailController::class, 'send']);
});
