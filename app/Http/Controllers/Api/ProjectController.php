<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OurProjectsResource;
use App\Models\OurProjects;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{
    public function index(): JsonResponse
    {
        $projects = OurProjects::all();

        return response()->json(OurProjectsResource::collection($projects), 200);
    }
}
