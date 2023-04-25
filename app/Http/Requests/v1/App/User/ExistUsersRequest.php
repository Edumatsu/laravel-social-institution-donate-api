<?php

namespace App\Http\Requests\v1\App\User;

use Illuminate\Foundation\Http\FormRequest;

class ExistUsersRequest extends FormRequest
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
            'cell_phones' => 'required|array',
            'cell_phones.*' => 'required|string|max:16',
        ];
    }

    public function bodyParameters()
    {
        return [
            'cell_phones' => [
                'description' => 'Cellphones to find existant users',
                'example' => [
                    '+5514988887777',
                    '+5514988887778',
                    '+5514988887779',
                ]
            ],
        ];
    }
}
