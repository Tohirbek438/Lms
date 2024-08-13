<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OnlineDarsResource;
use App\Models\OnlineLesson;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class AdminOnlineDarsController extends Controller
{
    public function index(): JsonResponse
    {
        $media = Cache::remember('lessons', 60, function () {
            return OnlineLesson::first();
        });
        if ($media) {
            return response()->json(new OnlineDarsResource($media), 200);
        } else {
            return response()->json(['message' => 'Not Found'], 404);
        }
    }
}
