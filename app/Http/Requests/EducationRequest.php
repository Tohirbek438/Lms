<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|array',
            'title.en' => 'string',
            'title.ru' => 'string',
            'title.uz' => 'required|string',
            'description.uz' => 'required|string',
            'description' => 'required|array',
            'description.en' => 'string',
            'description.ru' => 'string',
            'description.uz' => 'required|string',
            'media_id' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }
}
