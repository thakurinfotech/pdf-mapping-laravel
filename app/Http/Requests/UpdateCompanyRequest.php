<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            // 'name' => ['required','max:250'],
            'cin'  => ['required','max:250'],
            'registered_office'  => ['required','max:250'],
            'registered_office_at'  => ['required','max:250'],
        ];
    }

    /**
     * Get the validation rules messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'name.required' => 'Company name is required',
            'cin.required' => 'CIN name is required',
            'registered_office.required' => 'Registered office is required',
            'registered_office_at.required' => 'Registered office  location is required',
        ];
    }
}
