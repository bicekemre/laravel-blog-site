<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|sometimes|min:2",
            "text" => "required|sometimes|min:5",
        ];
    }

    public function messages(): array
    {
        return [
            "title.required" => "This area is neccesary.",
            "title.min" => "Name and surname field must contain at least 3 characters.",
            "text.required" => "This area is neccesary.",
            "text.min" => "Name and surname field must contain at least 5 characters.",
        ];
    }
}
