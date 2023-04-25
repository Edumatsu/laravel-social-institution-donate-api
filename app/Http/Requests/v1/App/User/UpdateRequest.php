<?php

namespace App\Http\Requests\v1\App\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'min:3|max:20',
            'last_name' => 'max:100',
            'email' => 'email|max:100',
            'attachment' => 'file|max:8192',
            'attachmentBase64' => 'array',
            'attachmentBase64.name' => 'string|max:255',
            'attachmentBase64.content' => 'string',
        ];
    }

    public function bodyParameters()
    {
        return [
            'first_name' => [
                'description' => 'The user first name',
                'example' => 'Eduardo'
            ],
            'last_name' => [
                'description' => 'The user surname',
                'example' => 'Soares'
            ],
            'email' => [
                'description' => 'The user email',
                'example' => 'eduardomatsuzaki@gmail.com'
            ],
        ];
    }
}
