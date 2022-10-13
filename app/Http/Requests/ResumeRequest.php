<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
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
            "content" => "required|sometimes|min:5",
            "alt"=> "required|numeric|min:1",
        ];
    }

    public function messages(): array
    {
        return [
            "title.required" => "This area is neccesary.",
            "title.min" => "Name and surname field must contain at least 3 characters.",
            "content.required" => "This area is neccesary.",
            "content.min" => "Name and surname field must contain at least 5 characters.",
        ];
    }
}
