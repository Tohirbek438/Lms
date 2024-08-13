<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TypeSiteResource;
use App\Models\TypeSite;
use Illuminate\Http\JsonResponse;

class TypeSiteController extends Controller
{
    public function index(): JsonResponse
    {
        $mySite = TypeSite::all();

        return response()->json(TypeSiteResource::collection($mySite), 200);
    }
}
