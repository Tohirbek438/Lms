<?php

namespace App\Http\Services;

use App\Models\OurProjects;
use Illuminate\Support\Facades\Storage;

class ProjectsService
{
    public function createProjects($data)
    {
        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('images', 'public');
        }

        return OurProjects::create($data);
    }

    public function projectsAll()
    {
        return OurProjects::all();
    }

    public function getResourceById($id)
    {
        return OurProjects::findOrFail($id);
    }

    public function updateResource($id, $data)
    {
        $resource = OurProjects::findOrFail($id);

        if (isset($data['image'])) {

            if ($resource->image) {
                Storage::delete($resource->image);
            }
            $data['image'] = $this->storeImage($data['image']);

        }
        if ($resource->status) {
            $data['status'] = 0;
        }

        $resource->update($data);

        return $resource;
    }

    public function deleteResource($id)
    {
        $resource = OurProjects::findOrFail($id);
        if ($resource->image) {
            Storage::delete($resource->image);
        }

        $resource->delete();

        return $resource;
    }

    protected function storeImage($image)
    {
        return $image->store('images/projects', 'public');
    }
}
