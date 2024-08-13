<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Http\Services\ServiceService;
use App\Models\Service;
use App\Models\ServiceModel;

class ServiceController extends Controller
{
    protected $serviceService;

    public function __construct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }

    public function index()
    {
        $service = Service::all();

        return view('admin.sites.service.index', compact('service'));
    }

    public function create()
    {
        return view('admin.sites.service.create');
    }

    public function edit($id)
    {
        $service = ServiceModel::findOrFail($id);

        return view('admin.sites.service.edit', compact('service'));
    }

    public function store(ServiceRequest $request)
    {
        $data = $request->validated();
        $this->serviceService->create($data);

        return redirect()->route('service.index');
    }

    public function show(int $id)
    {
        $service = ServiceModel::findOrFail($id);

        return view('admin.sites.service.show', ['service' => $service]);
    }

    public function update(UpdateServiceRequest $request, int $id)
    {
        $mediaPortal = Service::findOrFail($id);
        $data = $request->validated();
        $mediaPortal = $this->serviceService->update($mediaPortal, $data);

        return redirect()->route('service.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(int $id)
    {
        $mediaPortal = Service::findOrFail($id);
        $this->serviceService->delete($mediaPortal);

        return redirect()->route('service.index');
    }
}
