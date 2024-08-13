<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class OurProjectsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->getTranslation('title', App::getLocale()),
            'desc' => $this->getTranslation('desc', App::getLocale()),
            'image' => $this->getImage(),
        ];
    }
}
