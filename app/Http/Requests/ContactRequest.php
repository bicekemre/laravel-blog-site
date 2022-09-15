<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            "email" => "required|sometimes|email",
            "phone" => "required|numeric|max:11",
            "instagram" => "sometimes|min:3",
            "linkedin" => "sometimes|min:3",
            "facebook" => "sometimes|min:3",
            "github" => "sometimes|min:3",
            "pinterest" => "sometimes|min:3",
        ];
    }
}
