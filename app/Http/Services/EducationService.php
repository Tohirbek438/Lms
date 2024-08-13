<?php

namespace App\Http\Services;

use App\Models\Education;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class EducationService
{
    public function create(array $data): Education
    {
        $mediaPortal = new Education;
        $mediaPortal->title = $data['title'];
        $mediaPortal->description = $data['description'];
        $mediaPortal->media_id = $data['media_id'];
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $mediaPortal->image = $data['image']->store('/education', 'public');
        }

        $mediaPortal->save();

        return $mediaPortal;
    }

    public function update(Education $mediaPortal, array $data): Education
    {
        $mediaPortal->title = $data['title'];
        $mediaPortal->description = $data['description'];
        $mediaPortal->media_id = $data['media_id'];
        $mediaPortal->image = $this->handleImageUpload($data['image'] ?? $mediaPortal->image);

        $mediaPortal->save();

        return $mediaPortal;
    }

    public function delete(Education $mediaPortal): void
    {
        if ($mediaPortal->image) {
            Storage::disk('public')->delete($mediaPortal->image);
        }

        $mediaPortal->delete();
    }

    private function handleImageUpload($image)
    {
        if (! $image) {
            return null;
        }

        return $image->store('/education', 'public');
    }
}
