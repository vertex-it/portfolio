<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'mail' => ['required', 'email'],
            'phone' => ['nullable'],
            'subject' => ['required'],
            'message' => ['required'],
            'g-recaptcha-response' => ['recaptcha'],
        ];
    }
}
