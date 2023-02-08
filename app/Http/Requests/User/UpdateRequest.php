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
            'name'     => ['required', 'string','max:225'],
            'email'    => ['required', 'string', 'email:rfc,dns', 'max:255'],
            'verified' => ['required', 'boolean'],
            'type'     => ['required', 'string', Rule::in(Type::getValues())], 
        ];
    }
}
