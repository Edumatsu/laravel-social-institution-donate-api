<?php

namespace App\Http\Requests\v1\App;

use Illuminate\Foundation\Http\FormRequest;

class ListInstitutionRequest extends FormRequest
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
            'search' => 'max:255',
            'page' => 'present|integer',
        ];
    }

    public function bodyParameters()
    {
        return [
            'search' => [
                'description' => 'The search term',
                'example' => 'Instituto'
            ],
            'page' => [
                'description' => 'Use for paginate results',
                'example' => 2
            ],
        ];
    }
}
