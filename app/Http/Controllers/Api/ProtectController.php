<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProtectResource;
use App\Models\Protect;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class ProtectController extends Controller
{
    public function index(): JsonResponse
    {
        $media = Cache::remember('about', 60, function () {
            return Protect::first();
        });
        if ($media) {
            return response()->json(new ProtectResource($media), 200);
        } else {
            return response()->json(['message' => 'Not Found'], 404);
        }
    }
}
