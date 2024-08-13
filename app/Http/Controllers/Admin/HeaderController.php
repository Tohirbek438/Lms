<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderInfoRequest;
use App\Http\Services\HeaderService;
use App\Models\HeaderInfo;
use App\Models\HeaderInfoModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HeaderController extends Controller
{
    protected $resourceService;

    public function __construct(HeaderService $resourceService)
    {
        $this->resourceService = $resourceService;
    }

    public function index()
    {
        $header = HeaderInfo::all();

        return view('admin.sites.header', compact('header'));
    }

    public function create()
    {
        return view('admin.sites.header-create');
    }

    public function store(HeaderInfoRequest $request)
    {
        $validatedData = $request->validated();
        $this->resourceService->createResource($validatedData);

        return redirect()->route('header.index')->with('success', 'Header created successfully.');
    }

    public function show(string $id)
    {
        return view('admin.sites.header-view', ['header' => HeaderInfoModel::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $header = HeaderInfoModel::find($id);

            return view('admin.sites.header-edit', compact('header'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.error.error')->with('error', 'Header not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HeaderInfoRequest $request, $id)
    {
        $validatedData = $request->validated();

        try {
            $this->resourceService->updateResource($id, $validatedData);

            return redirect()->route('header.index')->with('success', 'Header updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('header.index')->with('error', 'Header not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $this->resourceService->deleteResource($id);

            return redirect()->route('header.index')->with('success', 'Header deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('header.index')->with('error', 'Header not found.');
        }
    }
}
