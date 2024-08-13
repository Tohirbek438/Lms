<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Http\Services\AboutService;
use App\Models\About;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AboutController extends Controller
{
    protected $resourceService;

    public function __construct(AboutService $resourceService)
    {
        $this->resourceService = $resourceService;
    }

    public function index(): JsonResponse
    {
        $media = Cache::remember('about', 60, function () {
            return About::first();
        });
        if ($media) {
            return response()->json(new AboutResource($media), 200);
        } else {
            return response()->json(['message' => 'Not Found'], 404);
        }
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
