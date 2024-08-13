<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Http\Services\AboutService;
use App\Models\AboutModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AboutController extends Controller
{
    protected $aboutService;

    public function __construct(AboutService $aboutService)
    {
        $this->aboutService = $aboutService;
    }

    public function index()
    {
        $abouts = $this->aboutService->getAllResources();

        return view('admin.sites.site_about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.sites.site_about.create-about');
    }

    public function store(AboutRequest $request)
    {
        $validatedData = $request->validated();
        $this->aboutService->createResource($validatedData);

        return redirect()->route('about.index')->with('success', 'About section created successfully.');
    }

    public function show($id)
    {
        try {
            $about = AboutModel::find($id);

            return view('admin.sites.site_about.show', compact('about'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.error')->with('error', 'About section not found.');
        }
    }

    public function edit($id)
    {
        try {
            $about = AboutModel::find($id);

            return view('admin.sites.site_about.edit', compact('about'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.error')->with('error', 'About section not found.');
        }
    }

    public function update(UpdateAboutRequest $request, $id)
    {
        $validatedData = $request->validated();
        try {
            $this->aboutService->updateResource($id, $validatedData);

            return redirect()->route('about.index')->with('success', 'About section updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.error')->with('error', 'About section not found.');
        }
    }

    public function destroy($id)
    {
        try {
            $this->aboutService->deleteResource($id);

            return redirect()->route('about.index')->with('success', 'About section deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('about.error')->with('error', 'About section not found.');
        }
    }
}
