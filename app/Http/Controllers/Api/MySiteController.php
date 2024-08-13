<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MySiteResource;
use App\Models\MySite;
use Illuminate\Http\JsonResponse;

class MySiteController extends Controller
{
    public function index(): JsonResponse
    {
        $mySites = MySite::with('site_type')->get();

        return response()->json(MySiteResource::collection($mySites), 200);
    }
}
