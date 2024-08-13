<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class ProtectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'description' => $this->getTranslation('description', App::getLocale()),
            'title' => $this->getTranslation('title', App::getLocale()),
            'image' => $this->getImage(),
            'protect_procent' => $this->protect_procent,
        ];
    }
}
