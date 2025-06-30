<?php

use App\Http\Controllers\Melody\SheetMusicController;
use App\Http\Controllers\portfolio\ProjectController;
use App\Models\portfolio\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['api'])->group(function () {
    Route::get('/projects', [ProjectController::class, 'index']);

    //API REST FOR SHEET MUSIC
    Route::get('/sheet-music', [SheetMusicController::class, 'index']);
    Route::post('/sheet-music', [SheetMusicController::class, 'store']);
    Route::get('/sheet-music/{id}', [SheetMusicController::class, 'show']);
    Route::patch('/sheet-music/{id}', [SheetMusicController::class, 'update']);
    Route::delete('/sheet-music/{id}', [SheetMusicController::class, 'destroy']);

    //Route::apiResource('/danger-identifications', DangerIdentificationController::class);
    //Route::post('/update/follow-up-controls/{id}', [FollowUpControllController::class, 'updateFollowUpControl']);

});
