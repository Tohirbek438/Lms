<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class ContactController extends Controller
{
    public function index(): JsonResponse
    {

        $contact = Cache::remember('contact', 60, function () {
            return Contact::first();
        });

        return response()->json(new ContactResource($contact), 200);
    }
}
