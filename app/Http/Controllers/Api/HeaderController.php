<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HeaderInfoResource;
use App\Models\HeaderInfo;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class HeaderController extends Controller
{
    public function index(): JsonResponse
    {
        $media = Cache::remember('header_info', 60, function () {
            return HeaderInfo::first();
        });
        if ($media) {
            return response()->json(new HeaderInfoResource($media), 200);
        } else {
            return response()->json(['message' => 'Not Found'], 404);
        }
    }
}
