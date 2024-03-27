<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            // Other validation rules for post creation
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'content.required' => 'Content is required',
            // Custom error messages for other fields
        ];
    }
}
