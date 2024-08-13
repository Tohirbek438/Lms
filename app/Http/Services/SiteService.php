<?php

namespace App\Http\Services;

use App\Models\MySite;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class SiteService
{
    public function create(array $data): MySite
    {
        $typesite = new MySite;
        $typesite->title = $data['title'];
        $typesite->type = $data['type'];
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $typesite->image = $data['image']->store('sites', 'public');
        }
        $typesite->save();

        return $typesite;
    }

    public function update(MySite $typesite, array $data)
    {
        $typesite->title = $data['title'];
        $typesite->type = $data['type'];
        if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
            $typesite->image = $data['image']->store('sites', 'public');
        }
        $typesite->save();

        return $typesite;
    }

    public function delete(MySite $typesite): void
    {
        if ($typesite->image) {
            Storage::disk('public')->delete($typesite->image);
        }
        $typesite->delete();
    }
}
