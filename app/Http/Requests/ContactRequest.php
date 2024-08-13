<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'location' => 'required|array',
            'location.en' => 'string',
            'location.ru' => 'string',
            'location.uz' => 'required|string',
            'email' => 'required|email',
            'number1' => 'required',
            'other_number' => 'required',
        ];
    }
}
