<?php

namespace App\Http\Services;

use App\Models\Protect;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProtectService
{
    public function create(array $data): Protect
    {
        $protect = new Protect;
        $protect->title = $data['title'];
        $protect->description = $data['description'];
        $protect->protect_procent = $data['protect_procent'];
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $protect->image = $data['image']->store('protect', 'public');
        }
        $protect->save();

        return $protect;
    }

    public function update(Protect $protect, array $data): Protect
    {
        $protect->title = $data['title'];
        $protect->description = $data['description'];
        $protect->protect_procent = $data['protect_procent'];
        $protect->image = $this->handleImageUpload($data['image'] ?? $protect->image);
        $protect->save();

        return $protect;
    }

    public function delete(Protect $protect): void
    {
        if ($protect->image) {
            Storage::disk('public')->delete($protect->image);
        }

        $protect->delete();
    }

    private function handleImageUpload($image)
    {
        if (! $image) {
            return null;
        }

        return $image->store('protect', 'public');
    }
}
