<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutRequest extends FormRequest
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
            'desc' => 'array',
            'desc.ru' => 'required|string',
            'desc.en' => 'required|string',
            'desc.uz' => 'required|string',
            'image' => 'nullable|file',
            'status' => 'string',
            'active_users' => 'required',
            'active_users_title' => 'array',
            'active_users_title.ru' => 'required|string',
            'active_users_title.en' => 'required|string',
            'active_users_title.uz' => 'required|string',
            'prepared_projects' => 'required',
            'prepared_projects_title' => 'array',
            'prepared_projects_title.ru' => 'required|string',
            'prepared_projects_title.en' => 'required|string',
            'prepared_projects_title.uz' => 'required|string',
        ];
    }
}
