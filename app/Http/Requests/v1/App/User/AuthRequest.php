<?php

namespace App\Http\Requests\v1\App\User;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'cell_phone' => 'required|min:13|max:16',
            'fb_token' => 'required',
        ];
    }

    public function bodyParameters()
    {
        return [
            'cell_phone' => [
                'description' => 'The user cell phone',
                'example' => '+5511988887777'
            ],
            'fb_token' => [
                'description' => 'The firebase user token',
                'example' => '123456'
            ]
        ];
    }
}
