<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'ltd_name'     => 'required|min:3|max:100',
            'country'      => 'required|min:3|max:100',
            'address'      => 'required|min:3|max:100',

            'main_mail'    => 'required|string|email|max:100',
            'footer_mail'  => 'required|string|email|max:100',
            'phone_number' => 'required|min:11|numeric',

            'ltd_name_fr'  => 'nullable|min:3|max:100',
            'country_fr'   => 'required|min:3|max:100',
            'address_fr'   => 'nullable|min:3|max:100',

            'ltd_name_jp'  => 'nullable|min:3|max:100',
            'country_jp'   => 'required|min:3|max:100',
            'address_jp'   => 'nullable|min:3|max:100',
            
        ];
    }
}
