<?php

namespace App\Http\Requests\v1\Backoffice\Institution;

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
            'name' => 'required|max:50',
            'description' => 'max:140',
            'document' => 'max:20',
            'phone' => 'max:15',
            'cellphone' => 'max:15',

            'attachment' => 'file|max:8192',

            'images' => 'array',
            'images.*' => 'file|max:8192',

            'website' => 'max:255',
            'facebook' => 'max:255',
            'instagram' => 'max:255',
            'payment_token' => 'max:255',
            'special_donate_text' => 'present',
            'special_donate_url' => 'max:255',
            'voluntary_text' => 'present',
            'voluntary_url' => 'max:255',
            'money_donate' => 'boolean',

            'main_category' => 'present|integer',
            'categories' => 'array',
            'active' => 'required|boolean',

            /*'address' => 'required|array',
            'address.name' => 'max:50',
            'address.cep' => 'required|max:9',
            'address.street' => 'required|max:255',
            'address.number' => 'required|max:20',
            'address.neighborhood' => 'required|max:100',
            'address.complement' => 'max:100',
            'address.city' => 'required|max:100',
            'address.state' => 'required|max:2',*/
        ];
    }

    public function bodyParameters()
    {
        return [
            'name' => [
                'description' => 'The institution name',
                'example' => 'Instituto Arca da Fé'
            ],
            'description' => [
                'description' => 'The institution small description',
                'example' => 'O Instituto tem como objetivo ajudar e resgatar os animais de rua'
            ],
            'about' => [
                'description' => 'The institution about',
                'example' => 'Instituto <strong>Arca da Fé</strong> lorem ipsum dolor sit amet'
            ],
            'document' => [
                'description' => 'The institution CNPJ',
                'example' => '123456789000115'
            ],
            'phone' => [
                'description' => 'The institution phone',
                'example' => '+5514998887777'
            ],
            'cellphone' => [
                'description' => 'The institution cellphone',
                'example' => '+5514988887777'
            ],
            'attachmentBase64.name' => [
                'description' => 'The name of attachment (with extension)',
                'example' => 'joao.jpg',
            ],
            'attachmentBase64.content' => [
                'description' => 'The content of attachment',
                'example' => 'base64:lifeisloka...',
            ],
            'images' => [
                'description' => 'array of files',
                'example' => 'file'
            ],
            'website' => [
                'description' => 'The institution website',
                'example' => 'https://www.site.com'
            ],
            'facebook' => [
                'description' => 'The institution facebook',
                'example' => 'https://www.site.com'
            ],
            'instagram' => [
                'description' => 'The institution instagram',
                'example' => 'https://www.site.com'
            ],
            'payment_token' => [
                'description' => 'The institution Pagseguro payment token',
                'example' => 'htsqqw...'
            ],
            'special_donate_text' => [
                'description' => 'The institution special donate page text',
                'example' => 'https://www.site.com'
            ],
            'special_donate_url' => [
                'description' => 'The institution special donate website page',
                'example' => 'https://www.site.com/specialdonate'
            ],
            'voluntary_text' => [
                'description' => 'The institution voluntary page text',
                'example' => 'https://www.site.com'
            ],
            'voluntary_url' => [
                'description' => 'The institution voluntary website page',
                'example' => 'https://www.site.com/voluntary'
            ],
            'money_donate' => [
                'description' => 'The institution accept money donate',
                'example' => 'true'
            ],
            'categories' => [
                'description' => 'The Category IDs that belongs to the new institution',
                'example' => [3, 6 ,9]
            ],

            'address.name' => [
                'description' => 'The institution address name',
                'example' => 'Matriz'
            ],
            'address.cep' => [
                'description' => 'The institution address cep',
                'example' => '18681860'
            ],
            'address.street' => [
                'description' => 'The institution address street',
                'example' => '18681860'
            ],
            'address.number' => [
                'description' => 'The institution address number',
                'example' => '18681860'
            ],
            'address.neighborhood' => [
                'description' => 'The institution address neighborhood',
                'example' => '18681860'
            ],
            'address.complement' => [
                'description' => 'The institution address complement',
                'example' => '18681860'
            ],
            'address.city' => [
                'description' => 'The institution address city',
                'example' => '18681860'
            ],
            'address.state' => [
                'description' => 'The institution address state',
                'example' => '18681860'
            ],
        ];
    }
}
