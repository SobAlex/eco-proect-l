<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required',
            'short_content' => 'required',
            'content' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,svg,webp,gif',
            'category_id' => 'nullable|exists:categories,id',
        ];
    }
}