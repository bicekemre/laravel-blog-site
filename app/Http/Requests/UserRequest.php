<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
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
            "name" => "required|sometimes|min:3",
            'password' => 'required|sometimes|string|min:5|confirmed'
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "This area is neccesary.",
            "name.min" => "Name and surname field must contain at least 3 characters.",
            "password.required" => "This area is neccesary.",
            "password.min" => "Password field must be at least 5 characters.",
            "password.confirmed" => "Passwords entered are not the same.",
        ];
    }

    protected function passedValidation()
    {
        if ($this->request->has("password")) {
            $password = $this->request->get("password");
            $this->request->set("password", Hash::make($password));
        }
    }
}

