<?php

namespace App\Http\Requests\User;

use App\Enum\User\Type;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'     => ['sometimes', 'string','max:225'],
            'email'    => ['sometimes', 'string', 'email:rfc,dns', 'max:255'],
            'verified' => ['sometimes', 'boolean'],
            'type'     => ['sometimes', 'string', Rule::in(Type::getValues())], 
        ];
    }
}
