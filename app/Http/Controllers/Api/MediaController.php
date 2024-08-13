<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MediaResource;
use App\Models\MediaPortal;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class MediaController extends Controller
{
    public function index(): JsonResponse
    {
        $media = Cache::remember('media', 60, function () {
            return MediaPortal::with('educations')->get();
        });

        return response()->json(MediaResource::collection($media), 200);
    }
}
