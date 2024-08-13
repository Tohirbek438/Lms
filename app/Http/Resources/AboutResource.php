<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class AboutResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'description' => $this->getTranslation('desc', App::getLocale()),
            'active_users_title' => $this->getTranslation('active_users_title', App::getLocale()),
            'prepared_projects_title' => $this->getTranslation('prepared_projects_title', App::getLocale()),
            'active_users' => $this->active_users,
            'prepared_projects' => $this->prepared_projects,
            'image' => $this->getImage(),
        ];
    }
}
