<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class ContactResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'location' => $this->getTranslation('location', App::getLocale()),
            'number1' => $this->number1,
            'other_number' => $this->other_number,
            'email' => $this->email,
        ];
    }
}
