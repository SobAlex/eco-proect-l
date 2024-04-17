<?php

namespace App\Http\Requests\Post;

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
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
