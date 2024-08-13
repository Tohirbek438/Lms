<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderInfoRequest extends FormRequest
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
            'title.ru' => 'nullable|string|max:255',
            'title.en' => 'nullable|string|max:255',
            'title.uz' => 'required|string|max:255',
            'desc' => 'array',
            'count' => 'required',
            'desc.uz' => 'required|string|max:255',
            'desc.ru' => 'nullable|string|max:255',
            'desc.en' => 'nullable|string|max:255',
        ];
    }
}
