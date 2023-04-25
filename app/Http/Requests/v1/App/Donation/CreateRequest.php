<?php

namespace App\Http\Requests\v1\App\Donation;

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
            'institution_id' => 'required:integer',
            'institution_amount' => 'required:numeric',
            'app_amount' => 'required:numeric'
        ];
    }

    public function bodyParameters()
    {
        return [
            'institution_id' => [
                'description' => 'The donated Institution Id',
                'example' => '1'
            ],
            'institution_amount' => [
                'description' => 'The amount donated to institution',
                'example' => '10.00'
            ],
            'app_amount' => [
                'description' => 'The amount donated to Causas App',
                'example' => '1.00'
            ],
        ];
    }
}
