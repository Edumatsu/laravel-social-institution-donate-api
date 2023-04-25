<?php

namespace App\Http\Requests\v1\App\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'max:100',
            'cell_phone' => 'required|string|min:13|max:16|unique:users',
            'email' => 'required|email|max:100',
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
            'cell_phone' => [
                'description' => 'The user cell phone',
                'example' => '+5511988887777'
            ],
            'email' => [
                'description' => 'The user email',
                'example' => 'eduardomatsuzaki@gmail.com'
            ],
            'attachmentBase64.name' => [
                'description' => 'The name of attachment (with extension)',
                'example' => 'joao.jpg',
            ],
            'attachmentBase64.content' => [
                'description' => 'The content of attachment',
                'example' => 'base64:lifeisloka...',
            ],
        ];
    }
}
