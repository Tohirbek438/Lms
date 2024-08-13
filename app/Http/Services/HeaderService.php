<?php

namespace App\Http\Services;

use App\Models\HeaderInfo;

class HeaderService
{
    public function createResource($data)
    {
        return HeaderInfo::create($data);
    }

    public function getAllResources()
    {
        return HeaderInfo::all();
    }

    public function getResourceById($id)
    {
        return HeaderInfo::findOrFail($id);
    }

    public function updateResource($id, $data)
    {
        $resource = HeaderInfo::findOrFail($id);
        $resource->update($data);

        return $resource;
    }

    public function deleteResource($id)
    {
        $resource = HeaderInfo::findOrFail($id);
        $resource->delete();

        return $resource;
    }
}
