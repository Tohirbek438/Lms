<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreferenceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'array',
            'title.uz' => 'required|string',
            'title.ru' => 'required|string',
            'title.en' => 'required|string',
            'desc' => 'array',
            'desc.uz' => 'required|string',
            'desc.ru' => 'required|string',
            'desc.en' => 'required|string',
            'image' => 'required|file',
        ];
    }

    public function messages(): array
    {
        return [
            'title.array' => 'The title must be an array.',
            'title.uz.required' => 'The Uzbek title is required.',
            'title.uz.string' => 'The Uzbek title must be a string.',
            'title.ru.required' => 'The Russian title is required.',
            'title.ru.string' => 'The Russian title must be a string.',
            'title.en.required' => 'The English title is required.',
            'title.en.string' => 'The English title must be a string.',

            'desc.array' => 'The description must be an array.',
            'desc.uz.required' => 'The Uzbek description is required.',
            'desc.uz.string' => 'The Uzbek description must be a string.',
            'desc.ru.required' => 'The Russian description is required.',
            'desc.ru.string' => 'The Russian description must be a string.',
            'desc.en.required' => 'The English description is required.',
            'desc.en.string' => 'The English description must be a string.',

            'image.required' => 'An image file is required.',
            'image.file' => 'The image must be a valid file.',
        ];
    }
}
