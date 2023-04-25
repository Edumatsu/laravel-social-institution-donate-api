<?php

namespace App\Http\Requests\v1\Backoffice\RecommendedInstitution;

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
            'month' => 'required|max:2|min:2',
            'year' => 'required|max:4|min:4',
            'institution_id' => 'required|integer',
        ];
    }

    public function bodyParameters()
    {
        return [
            'month' => [
                'description' => 'The recommendation month',
                'example' => 12
            ],
            'year' => [
                'description' => 'The recommendation year',
                'example' => 2021
            ],
            'institution_id' => [
                'description' => 'The institution id',
                'example' => 1
            ],
        ];
    }
}
