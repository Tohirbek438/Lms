<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RivalRequest;
use App\Http\Services\RivalService;
use App\Models\Rival;
use App\Models\RivalForWeb;

class RivalController extends Controller
{
    protected $mediaPortalService;

    public function __construct(RivalService $mediaPortalService)
    {
        $this->mediaPortalService = $mediaPortalService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rival = Rival::all();

        return view('admin.sites.rival.index', compact('rival'));
    }

    public function create()
    {
        return view('admin.sites.rival.create');
    }

    public function edit($id)
    {
        $mediaPortal = RivalForWeb::findOrFail($id);

        return view('admin.sites.rival.edit', compact('mediaPortal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RivalRequest $request)
    {
        $data = $request->validated();
        $this->mediaPortalService->create($data);

        return redirect()->route('rival.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $mediaPortal = Rival::findOrFail($id);

        return response()->json($mediaPortal);
    }

    public function update(rivalRequest $request, int $id)
    {
        $mediaPortal = rival::findOrFail($id);
        $data = $request->validated();
        $mediaPortal = $this->mediaPortalService->update($mediaPortal, $data);

        return redirect()->route('rival.index')->with('success', 'Competitor updated successfully.');
    }

    public function destroy(int $id)
    {
        $mediaPortal = rival::findOrFail($id);
        $this->mediaPortalService->delete($mediaPortal);

        return redirect()->route('rival.index');
    }
}
