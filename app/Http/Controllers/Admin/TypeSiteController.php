<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeSiteRequest;
use App\Http\Services\TypeSiteService;
use App\Models\TypeSite;
use App\Models\TypeSiteModel;

class TypeSiteController extends Controller
{
    protected $onlineService;

    public function __construct(TypeSiteService $onlineService)
    {
        $this->onlineService = $onlineService;
    }

    public function index()
    {
        $type = TypeSite::all();

        return view('admin.sites.type.index', compact('type'));
    }

    public function create()
    {
        return view('admin.sites.type.create');
    }

    public function edit($id)
    {
        $lesson = TypeSiteModel::findOrFail($id);

        return view('admin.sites.type.edit', compact('lesson'));
    }

    public function store(TypeSiteRequest $request)
    {
        $data = $request->validated();
        $this->onlineService->create($data);

        return redirect()->route('type_site.index');
    }

    public function show(int $id)
    {
        $service = TypeSiteModel::findOrFail($id);

        return view('admin.sites.type.show', ['service' => $service]);
    }

    public function update(TypeSiteRequest $request, int $id)
    {
        $mediaPortal = TypeSite::findOrFail($id);
        $data = $request->validated();
        $mediaPortal = $this->onlineService->update($mediaPortal, $data);

        return redirect()->route('type_site.index')->with('success', 'Type Project updated successfully.');
    }

    public function destroy(int $id)
    {
        $mediaPortal = TypeSite::findOrFail($id);
        $this->onlineService->delete($mediaPortal);

        return redirect()->route('type_site.index');
    }
}
