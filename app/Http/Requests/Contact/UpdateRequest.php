<?php

namespace App\Http\Requests\Contact;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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

            'logo' => 'nullable|mimes:jpeg,png,jpg,svg,webp,gif',
            'name_firm' => 'nullable',
            'slogan' => 'nullable',
            'adress' => 'nullable',
            'work_time' => 'nullable',
            'tel_work' => 'nullable',
            'tel_mob' => 'nullable',
            'email' => 'nullable',
            'main_text' => 'required',
        ];
    }
}
