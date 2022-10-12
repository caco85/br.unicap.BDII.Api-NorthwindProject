<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomersRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'instagram' => 'nullable|string',
            'CompanyName'  => 'nullable|string',
            'ContactName'  => 'nullable|string',
            'ContactTitle'  => 'nullable|string',
            'Address'  => 'nullable|string',
            'City'  => 'nullable|string',
            'Region'  => 'nullable|string',
            'PostalCode'  => 'nullable|string',
            'Country'  => 'nullable|string',
            'Phone'  => 'nullable|string',
            'Fax'  => 'nullable|string',
        ];
    }
}
