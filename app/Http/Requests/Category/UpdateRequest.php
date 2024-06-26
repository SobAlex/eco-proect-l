<?php

namespace App\Http\Requests\Category;

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
            'SEO_title' => 'nullable',
            'SEO_description' => 'nullable',
            'slug' => 'string|required',
            'title' => 'required',
            'short_content' => 'required',
            'content' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,svg,webp,gif',
        ];
    }
}
