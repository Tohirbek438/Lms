<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MySiteRequest;
use App\Http\Services\SiteService;
use App\Models\MySite;
use App\Models\MySiteModel;

class SiteController extends Controller
{
    protected $onlineService;

    public function __construct(SiteService $onlineService)
    {
        $this->onlineService = $onlineService;
    }

    public function index()
    {
        $site = MySite::all();

        return view('admin.sites.our_project.index', compact('site'));
    }

    public function create()
    {
        return view('admin.sites.our_project.create');
    }

    public function edit($id)
    {
        $site = MySiteModel::findOrFail($id);

        return view('admin.sites.our_project.edit', compact('site'));
    }

    public function store(MySiteRequest $request)
    {
        $data = $request->validated();
        $this->onlineService->create($data);

        return redirect()->route('site.index');
    }

    public function show(int $id)
    {
        $service = MySiteModel::findOrFail($id);

        return view('admin.sites.our_project.show', ['service' => $service]);
    }

    public function update(MySiteRequest $request, int $id)
    {
        $mediaPortal = MySite::findOrFail($id);
        $data = $request->validated();
        $mediaPortal = $this->onlineService->update($mediaPortal, $data);

        return redirect()->route('site.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(int $id)
    {
        $mediaPortal = MySite::findOrFail($id);
        $this->onlineService->delete($mediaPortal);

        return redirect()->route('site.index');
    }
}
