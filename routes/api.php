<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SubscriptionController;
use App\Http\Controllers\Api\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(SubscriptionController::class)->group(function (){
    Route::get('/subscriptions', 'index');
    Route::post('/subscription', 'store');
});

Route::controller(ContactController::class)->group(function (){
    Route::get('/contacts', 'index');
    Route::post('/contact', 'store');
});