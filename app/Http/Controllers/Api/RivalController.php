<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RivalResource;
use App\Models\Rival;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class RivalController extends Controller
{
    public function index(): JsonResponse
    {
        $rival = Cache::remember('media', 60, function () {
            return Rival::all();
        });

        return response()->json(RivalResource::collection($rival), 200);
    }
}
