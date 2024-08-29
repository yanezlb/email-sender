<?php

use App\Http\Controllers\Api\V1\EmailController;
use App\Http\Middleware\ApiKeyMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
Route::middleware('auth.apikey')->prefix('V1')->group(function(){
    Route::post('send-email', [EmailController::class, 'send']);
});
*/
/*
Route::group([
    'prefix' => 'V1',
    'middleware' => 'auth.apikey'
], function(){
    Route::post('send-email', [EmailController::class, 'send']);
});
*/


Route::prefix('V1')->group(function(){
    Route::post('send-email', [EmailController::class, 'send'])->middleware(ApiKeyMiddleware::class);
});
