<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

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
    #[ArrayShape(["title" => "string", "contents" => "string"])]
    public function rules(): array
    {
        return [
            "title" => "required|sometimes|min:2",
            "contents" => "required|sometimes|min:5",
        ];
    }

    #[ArrayShape(["title.required" => "string", "title.min" => "string", "contents.required" => "string", "contents.min" => "string"])]
    public function messages(): array
    {
        return [
            "title.required" => "This area is neccesary.",
            "title.min" => "Name and surname field must contain at least 3 characters.",
            "contents.required" => "This area is neccesary.",
            "contents.min" => "Name and surname field must contain at least 5 characters.",
        ];
    }
}
