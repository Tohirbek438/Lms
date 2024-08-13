<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MediaPortalRequest;
use App\Http\Services\MediaService;
use App\Models\Media;
use App\Models\MediaPortal;

class MediaController extends Controller
{
    protected $mediaPortalService;

    public function __construct(MediaService $mediaPortalService)
    {
        $this->mediaPortalService = $mediaPortalService;
    }

    public function index()
    {
        $mediaPortal = Media::first();

        return view('admin.sites.media.show', compact('mediaPortal'));
    }

    public function create()
    {
        return view('admin.sites.media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MediaPortalRequest $request)
    {
        $data = $request->validated();
        $this->mediaPortalService->create($data);

        return redirect()->route('media.index')->with('success', 'Media created successfully.');
    }

    public function edit($id)
    {
        $media = Media::findOrFail($id);

        return view('admin.sites.media.edit', compact('media'));
    }

    public function show(int $id)
    {
        $mediaPortal = Media::findOrFail($id);

        return view('admin.sites.media.show', compact('mediaPortal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MediaPortalRequest $request, int $id)
    {
        $mediaPortal = MediaPortal::findOrFail($id);
        $data = $request->validated();
        $mediaPortal = $this->mediaPortalService->update($mediaPortal, $data);

        return redirect()->route('media.index')->with('success', 'Media updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $mediaPortal = MediaPortal::findOrFail($id);
        $this->mediaPortalService->delete($mediaPortal);

        return redirect()->route('media.index');
    }
}
