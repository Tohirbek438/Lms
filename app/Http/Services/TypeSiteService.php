<?php

namespace App\Http\Services;

use App\Models\TypeSite;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class TypeSiteService
{
    public function create(array $data): TypeSite
    {
        $typesite = new TypeSite;
        $typesite->title = $data['title'];
        $typesite->count = $data['count'];
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $typesite->image = $data['image']->store('public/images/typesite');
        }
        $typesite->save();

        return $typesite;
    }

    public function update(TypeSite $typesite, array $data)
    {
        $typesite->title = $data['title'];
        $typesite->count = $data['count'];
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $typesite->image = $data['image']->store('public/images/typesite');
        }
        $typesite->save();

        return $typesite;
    }

    public function delete(TypeSite $typesite): void
    {
        if ($typesite->image) {
            Storage::disk('public')->delete($typesite->image);
        }
        $typesite->delete();
    }

    private function handleImageUpload($image)
    {
        if (! $image) {
            return null;
        }

        return $image->store('public/images/typesite');
    }
}
