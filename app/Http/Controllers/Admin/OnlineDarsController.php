<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OnlineDarsRequest;
use App\Http\Requests\UpdateOnlineDarsRequest;
use App\Http\Services\OnlineDarsService;
use App\Models\OnlineDarsModel;
use App\Models\OnlineLesson;

class OnlineDarsController extends Controller
{
    protected $onlineService;

    public function __construct(OnlineDarsService $onlineService)
    {
        $this->onlineService = $onlineService;
    }

    public function index()
    {
        $lesson = OnlineDarsModel::first();

        return view('admin.sites.lesson.index', compact('lesson'));
    }

    public function create()
    {
        return view('admin.sites.lesson.create');
    }

    public function edit($id)
    {
        $lesson = OnlineDarsModel::findOrFail($id);

        return view('admin.sites.lesson.edit', compact('lesson'));
    }

    public function store(OnlineDarsRequest $request)
    {
        $data = $request->validated();
        $this->onlineService->create($data);

        return redirect()->route('lesson.index');
    }

    public function show(int $id)
    {
        $service = OnlineDarsModel::findOrFail($id);

        return view('admin.sites.lesson.show', ['service' => $service]);
    }

    public function update(UpdateOnlineDarsRequest $request, int $id)
    {
        $mediaPortal = OnlineLesson::findOrFail($id);
        $data = $request->validated();
        $mediaPortal = $this->onlineService->update($mediaPortal, $data);

        return redirect()->route('lesson.index')->with('success', 'Lesson updated successfully.');
    }

    public function destroy(int $id)
    {
        $mediaPortal = OnlineLesson::findOrFail($id);
        $this->onlineService->delete($mediaPortal);

        return redirect()->route('lesson.index');
    }
}
