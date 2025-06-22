<?php

namespace App\Http\Controllers\portfolio;

use App\Http\Controllers\Controller;
use App\Models\portfolio\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return  Project::orderBy('created_at','desc')->get();
    }

}
