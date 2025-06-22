<?php

use App\Models\portfolio\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['api'])->group(function () {
    Route::get('/projects', function (Request $request) {
        // Logic to handle fetching users
        return Project::orderBy('created_at', 'desc')->get();
    });

});
