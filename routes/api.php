<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\AdminOnlineDarsController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ContactUsersController;
use App\Http\Controllers\Api\HeaderController;
use App\Http\Controllers\Api\MediaController;
use App\Http\Controllers\Api\MySiteController;
use App\Http\Controllers\Api\PreferenceController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ProtectController;
use App\Http\Controllers\Api\RivalController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\TypeSiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')->group(function () {
    Route::apiResource('/header', HeaderController::class);
    Route::apiResource('preferences', PreferenceController::class);
    Route::apiResource('/about', AboutController::class);
    Route::get('/projects', [ProjectController::class, 'index']);
    Route::get('/media', [MediaController::class, 'index']);
    Route::get('/rivals', [RivalController::class, 'index']);
    Route::get('/protect', [ProtectController::class, 'index']);
    Route::post('/contact-users', [ContactUsersController::class, 'contactUsers']);
    Route::get('/service', [ServiceController::class, 'index']);
    Route::get('/lesson', [AdminOnlineDarsController::class, 'index']);
    Route::get('/sites', [MySiteController::class, 'index']);
    Route::get('/type_sites', [TypeSiteController::class, 'index']);
    Route::get('/contact', [ContactController::class, 'index']);
});
