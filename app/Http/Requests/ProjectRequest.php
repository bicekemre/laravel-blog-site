<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            "title.required" => "This area is neccesary.",
            "title.min" => "Name and surname field must contain at least 3 characters.",
            "content.required" => "This area is neccesary.",
            "content.min" => "Name and surname field must contain at least 5 characters.",
            "techs.required" => "This area is neccesary.",
            "techs.min" => "Name and surname field must contain at least 3 characters.",
            "link.required" => "This area is neccesary.",
            "link.min" => "Name and surname field must contain at least 3 characters.",
        ];
    }
}
