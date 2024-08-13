<?php

namespace App\Http\Services;

use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutService
{
    public function createResource($data)
    {
        if (isset($data['image'])) {
            $data['image'] = $this->storeImage($data['image']);
        }

        return About::create($data);
    }

    public function getAllResources()
    {
        return About::all();
    }

    public function getResourceById($id)
    {
        return About::findOrFail($id);
    }

    public function updateResource($id, $data)
    {
        $resource = About::findOrFail($id);

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
        $resource = About::findOrFail($id);

        // Delete the image if it exists
        if ($resource->image) {
            Storage::delete($resource->image);
        }

        $resource->delete();

        return $resource;
    }

    protected function storeImage($image)
    {
        return $image->store('images/abouts', 'public');
    }
}
