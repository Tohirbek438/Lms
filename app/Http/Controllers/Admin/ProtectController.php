<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProtectRequest;
use App\Http\Services\ProtectService;
use App\Models\Protect;
use App\Models\ProtectModel;

class ProtectController extends Controller
{
    protected $mediaPortalService;

    public function __construct(ProtectService $mediaPortalService)
    {
        $this->mediaPortalService = $mediaPortalService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $protect = Protect::all();

        return view('admin.sites.protect.index', compact('protect'));
    }

    public function create()
    {
        return view('admin.sites.protect.create');
    }

    public function edit($id)
    {
        $mediaPortal = ProtectModel::findOrFail($id);

        return view('admin.sites.protect.edit', compact('mediaPortal'));
    }

    public function show($id)
    {
        $protect = ProtectModel::findOrFail($id);

        return view('admin.sites.protect.show', compact('protect'));
    }

    public function store(protectRequest $request)
    {

        $data = $request->validated();
        $this->mediaPortalService->create($data);

        return redirect()->route('protect.index');
    }

    public function update(ProtectRequest $request, int $id)
    {
        $mediaPortal = Protect::findOrFail($id);
        $data = $request->validated();
        $mediaPortal = $this->mediaPortalService->update($mediaPortal, $data);

        return redirect()->route('protect.index')->with('success', 'Competitor updated successfully.');
    }

    public function destroy(int $id)
    {
        $mediaPortal = Protect::findOrFail($id);
        $this->mediaPortalService->delete($mediaPortal);

        return redirect()->route('protect.index');
    }
}
