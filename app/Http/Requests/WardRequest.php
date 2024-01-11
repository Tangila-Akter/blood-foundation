<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class WardRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'division' => 'required',
            'district' => 'required',
            'upazila' => 'required',
            'union' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'division.required' => 'Please Select Division',
            'district.required' => 'Please Select District',
            'upazila.required' => 'Please Select Upazila',
            'union.required' => 'Please Select Union',
        ];
    }
}
