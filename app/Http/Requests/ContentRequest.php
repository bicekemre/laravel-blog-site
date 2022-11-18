<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            "home_name" => "required|sometimes",
            "home_content" => "required|sometimes",
            "home_about" => "required|sometimes",
            "home_title" => "required|sometimes",
            "home_content2" => "required|sometimes",
            "projects_content" => "required|sometimes",
            "blog_title1" => "required|sometimes",
            "blog_title2" => "required|sometimes",
            "blog_content1" => "required|sometimes",
            "blog_content2" => "required|sometimes",
            "about_name" => "required|sometimes",
            "about_content" => "required|sometimes",
        ];
    }
}
