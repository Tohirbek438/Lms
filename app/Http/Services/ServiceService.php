<?php

namespace App\Http\Services;

use App\Models\Service;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ServiceService
{
    public function create(array $data): Service
    {
        $service = new Service;
        $service->title = $data['title'];
        $service->description = $data['description'];
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $service->image = $data['image']->store('service', 'public');
        }
        $service->save();

        return $service;
    }

    public function update(Service $service, array $data): Service
    {
        $service->title = $data['title'];
        $service->description = $data['description'];
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $service->image = $data['image']->store('public/images/service');
        }
        $service->save();

        return $service;
    }

    public function delete(Service $service): void
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }
        $service->delete();
    }

    private function handleImageUpload($image)
    {
        if (! $image) {
            return null;
        }

        return $image->store('service', 'public');
    }
}
