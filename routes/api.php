<?php

use App\Http\Controllers\portfolio\ProjectController;
use App\Models\portfolio\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['api'])->group(function () {
    Route::get('/projects', [ProjectController::class, 'index']);
    //Route::apiResource('/danger-identifications', DangerIdentificationController::class);
    //Route::post('/update/follow-up-controls/{id}', [FollowUpControllController::class, 'updateFollowUpControl']);

});
