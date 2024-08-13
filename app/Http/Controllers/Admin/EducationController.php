<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationRequest;
use App\Http\Services\EducationService;
use App\Models\Education;
use App\Models\EducationForWeb;

class EducationController extends Controller
{
    protected $mediaPortalService;

    public function __construct(EducationService $mediaPortalService)
    {
        $this->mediaPortalService = $mediaPortalService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education = Education::all();

        return view('admin.sites.education.index', compact('education'));
    }

    public function create()
    {
        return view('admin.sites.education.create');
    }

    public function edit($id)
    {
        $mediaPortal = EducationForWeb::findOrFail($id);

        return view('admin.sites.education.edit', compact('mediaPortal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationRequest $request)
    {
        $data = $request->validated();
        $this->mediaPortalService->create($data);

        return redirect()->route('education.index')->with('success', 'Media created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $lesson = EducationForWeb::findOrFail($id);

        return view('admin.sites.education.show', compact('lesson'));
    }

    public function update(EducationRequest $request, int $id)
    {
        $mediaPortal = Education::findOrFail($id);
        $data = $request->validated();
        $mediaPortal = $this->mediaPortalService->update($mediaPortal, $data);

        return redirect()->route('education.index')->with('success', 'Media updated successfully.');
    }

    public function destroy(int $id)
    {
        $mediaPortal = Education::findOrFail($id);
        $this->mediaPortalService->delete($mediaPortal);

        return redirect()->route('education.index')->with('success', 'Media deleted successfully.');
    }
}
