<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerSearchPost extends FormRequest
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
            'searchItems' => 'required_without_all:name',
            'name' => '',
        ];
    }
    public $attributes;

    public function attributes()
    {
        return [
            'name' => '氏名',
        ];
    }
}
