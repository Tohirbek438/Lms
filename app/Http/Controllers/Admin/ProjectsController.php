<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectsRequest;
use App\Http\Requests\UpdateProjectsRequest;
use App\Http\Services\ProjectsService;
use App\Models\OurProjects;
use App\Models\ProjectModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProjectsController extends Controller
{
    protected $serviceProject;

    public function __construct(ProjectsService $serviceProject)
    {
        $this->serviceProject = $serviceProject;
    }

    public function index()
    {
        $projects = OurProjects::all();

        return view('admin.sites.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.sites.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectsRequest $request)
    {

        $validatedData = $request->validated();
        $this->serviceProject->createProjects($validatedData);

        return redirect()->route('project.index')->with('success', 'Project created successfully.');
    }

    public function show($id)
    {
        try {
            $project = ProjectModel::find($id);

            return view('admin.sites.projects.show', compact('project'));
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
            $project = $this->serviceProject->getResourceById($id);

            return view('admin.sites.projects.edit', compact('project'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.error')->with('error', 'Project section not found.');
        }
    }

    public function update(UpdateProjectsRequest $request, $id)
    {
        $validatedData = $request->validated();
        try {
            $this->serviceProject->updateResource($id, $validatedData);

            return redirect()->route('project.index')->with('success', 'About section updated successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.error')->with('error', 'About section not found.');
        }
    }

    public function destroy($id)
    {
        try {
            $this->serviceProject->deleteResource($id);

            return redirect()->route('project.index')->with('success', 'About section deleted successfully.');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('about.error')->with('error', 'About section not found.');
        }
    }
}
