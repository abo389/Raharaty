<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "name" => ["required", "max:255"],
            "email" => ["required", "email"],
            "msg" => ["required"]
        ];
    }
}
