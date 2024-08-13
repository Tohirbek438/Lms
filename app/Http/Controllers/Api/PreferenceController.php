<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PreferenceRequest;
use App\Http\Resources\PreferenceResource;
use App\Http\Services\PreferenceService;
use App\Models\Preference;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\ValidationException;

class PreferenceController extends Controller
{
    protected $preferenceService;

    public function __construct(PreferenceService $preferenceService)
    {
        $this->preferenceService = $preferenceService;
    }

    public function index(): JsonResponse
    {
        $preferences = Cache::remember('header_info', 60, function () {
            return Preference::all();
        });

        return response()->json(PreferenceResource::collection($preferences), 200);
    }

    public function store(PreferenceRequest $request): JsonResponse
    {
        try {
            $preference = $this->preferenceService->createPreference($request->validated());

            return response()->json($preference, 201);
        } catch (ValidationException $e) {
            return response()->json([
                'errors' => $e->errors(),
                'message' => 'Validation failed.',
            ], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 500);
        }
    }

    public function show($id): JsonResponse
    {
        try {
            $preference = $this->preferenceService->getPreferenceById($id);

            return response()->json($preference, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Preference not found.'], 404);
        }
    }

    public function update(PreferenceRequest $request, $id): JsonResponse
    {
        try {
            $preference = $this->preferenceService->updatePreference($id, $request->validated());

            return response()->json($preference, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Preference not found.'], 404);
        } catch (ValidationException $e) {
            return response()->json([
                'errors' => $e->errors(),
                'message' => 'Validation failed.',
            ], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Preference could not be updated.'], 500);
        }
    }

    public function destroy($id): JsonResponse
    {
        try {
            $this->preferenceService->deletePreference($id);

            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Preference not found.'], 404);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Preference could not be deleted.'], 500);
        }
    }
}
