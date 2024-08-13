<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class HeaderInfoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'desc' => $this->getTranslation('desc', App::getLocale()),
            'count' => $this->count,
            'title' => $this->getTranslation('title', App::getLocale()),
        ];
    }
}
