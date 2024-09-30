<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestBookMessageRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required'],
            'message' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
