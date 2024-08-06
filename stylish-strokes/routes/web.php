<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VisitorCountController;
use App\Http\Controllers\ToolControllers;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\StylesController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\GalleryController;


Route::get('/login', function() {
    return view('login'); 
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum','admin')->prefix('admin')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout']);


    Route::get('/visit', [VisitorCountController::class, 'getVisitors']);
    Route::post('/record-visit', [VisitorCountController::class, 'recordVisitor']);
    Route::get('/tool', [ToolControllers::class, 'tool']);
    Route::post('/tool', [ToolControllers::class, 'insert']);
    Route::put('/tool/{id}', [ToolControllers::class, 'update']);
    Route::delete('/tool/{id}', [ToolControllers::class, 'delete']);
    Route::post('/feedback', [FeedbackController::class, 'insert']);
    Route::get('/feedback', [FeedbackController::class, 'getList']);
    Route::delete('/feedback/{id}', [FeedbackController::class, 'delete']);
    Route::get('/styles', [StylesController::class, 'getList']);
    Route::post('/styles', [StylesController::class, 'insert']);
    Route::put('/styles/{id}', [StylesController::class, 'update']);
    Route::delete('/styles/{id}', [StylesController::class, 'delete']);
    Route::get('/learning', [LearningController::class, 'getResourse']);
    Route::post('/learning', [LearningController::class, 'insert']);
    Route::put('/learning/{id}', [LearningController::class, 'update']);
    Route::delete('/learning/{id}', [LearningController::class, 'delete']);
    Route::get('/gallery', [GalleryController::class, 'getGallery']);
    Route::post('/gallery', [GalleryController::class, 'insert']);
    Route::put('/gallery/{id}', [GalleryController::class, 'update']);
    Route::delete('/gallery/{id}', [GalleryController::class, 'delete']);
});
Route::get('/styles', [StylesController::class, 'getList']);
Route::get('/tool', [ToolControllers::class, 'tool']);
Route::get('/learning', [LearningController::class, 'getResourse']);
Route::get('/gallery', [GalleryController::class, 'getGallery']);
Route::post('/feedback', [FeedbackController::class, 'insert']);
Route::get('/visit', [VisitorCountController::class, 'getVisitors']);
Route::post('/record-visit', [VisitorCountController::class, 'recordVisitor']);
