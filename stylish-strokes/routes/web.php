<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorCountController;
use App\Http\Controllers\ToolControllers;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\StylesController;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\GalleryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('admin')->group(function () {
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
