<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'        => ['required', 'string', 'max:225'],
            'description' => ['nullable', 'string'],
        ];
    }
}
