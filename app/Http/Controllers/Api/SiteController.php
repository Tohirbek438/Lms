<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MySiteResource;
use App\Models\OurProjects;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class SiteController extends Controller
{
    public function index(): JsonResponse
    {
        $media = Cache::remember('about', 60, function () {
            return OurProjects::first();
        });
        if ($media) {
            return response()->json(new MySiteResource($media), 200);
        } else {
            return response()->json(['message' => 'Not Found'], 404);
        }
    }
}
