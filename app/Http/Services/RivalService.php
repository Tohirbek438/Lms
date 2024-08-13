<?php

namespace App\Http\Services;

use App\Models\Rival;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class RivalService
{
    public function create(array $data): Rival
    {
        $rival = new Rival;
        $rival->title = $data['title'];
        $rival->description = $data['description'];
        $rival->users = $data['users'];
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $rival->image = $data['image']->store('rival', 'public');
        }
        $rival->save();

        return $rival;
    }

    public function update(Rival $rival, array $data): Rival
    {
        $rival->title = $data['title'];
        $rival->description = $data['description'];
        $rival->users = $data['users'];
        $rival->image = $this->handleImageUpload($data['image'] ?? $rival->image);
        $rival->save();

        return $rival;
    }

    public function delete(Rival $rival): void
    {
        if ($rival->image) {
            Storage::disk('public')->delete($rival->image);
        }

        $rival->delete();
    }

    private function handleImageUpload($image)
    {
        if (! $image) {
            return null;
        }

        return $image->store('rival', 'public');
    }
}
