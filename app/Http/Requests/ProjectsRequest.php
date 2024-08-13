<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectsRequest extends FormRequest
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
            'title.ru' => 'string|max:255',
            'title.en' => 'string|max:255',
            'title.uz' => 'required|string|max:255',
            'desc' => 'array',
            'desc.uz' => 'required|string|max:255',
            'desc.ru' => 'string|max:255',
            'desc.en' => 'string|max:255',
            'status' => 'string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
