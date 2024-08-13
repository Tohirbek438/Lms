<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class ServiceController extends Controller
{
    public function index(): JsonResponse
    {
        $services = Cache::remember('service', 60, function () {
            return Service::all();
        });

        return response()->json(ServiceResource::collection($services), 200);
    }
}
