<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PreferenceRequest;
use App\Http\Requests\UpdatePreferRequest;
use App\Http\Services\PreferenceService;
use App\Models\Preference;
use App\Models\PreferenceModal;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PreferenceController extends Controller
{
    protected $serviceProject;

    public function __construct(PreferenceService $serviceProject)
    {
        $this->serviceProject = $serviceProject;
    }

    public function index()
    {
        $projects = Preference::all();

        return view('admin.sites.preference.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sites.preference.create');
    }

    public function store(PreferenceRequest $request)
    {
        $validatedData = $request->validated();
        $this->serviceProject->createPreference($validatedData);

        return redirect()->route('prefer.index')->with('success', 'Preference created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $project = PreferenceModal::first();

            return view('admin.sites.preference.show', compact('project'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.error')->with('error', 'Project section not found.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $project = PreferenceModal::first();

            return view('admin.sites.preference.edit', compact('project'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.error')->with('error', 'Project section not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePreferRequest $request, $id)
    {
        $validatedData = $request->validated();
        try {
            $this->serviceProject->updatePreference($id, $validatedData);

            return redirect()->route('prefer.index')->with('success', 'Preference section updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('prefer.error')->with('error', 'Preference section not found.');
        }
    }

    public function destroy($id)
    {
        try {
            $this->serviceProject->deletePreference($id);

            return redirect()->route('prefer.index')->with('success', 'Preference section deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('prefer.error')->with('error', 'Preference section not found.');
        }
    }
}
