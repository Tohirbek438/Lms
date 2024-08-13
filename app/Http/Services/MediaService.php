<?php

namespace App\Http\Services;

use App\Models\MediaPortal;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class MediaService
{
    public function create(array $data): MediaPortal
    {
        $mediaPortal = new MediaPortal;
        $mediaPortal->description = $data['description'];
        $mediaPortal->status = $data['status'];

        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $mediaPortal->image = $data['image']->store('media', 'public');
        }

        $mediaPortal->save();

        return $mediaPortal;
    }

    public function update(MediaPortal $mediaPortal, array $data): MediaPortal
    {
        $mediaPortal->description = $data['description'];
        $mediaPortal->image = $this->handleImageUpload($data['image'] ?? $mediaPortal->image);

        $mediaPortal->status = $data['status'];

        $mediaPortal->save();

        return $mediaPortal;
    }

    public function delete(MediaPortal $mediaPortal): void
    {
        // Delete the main image if it exists
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

        return $image->store('media', 'public');
    }
}
