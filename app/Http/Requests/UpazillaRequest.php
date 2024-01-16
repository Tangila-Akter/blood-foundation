<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UniqueTitle;

class UpazillaRequest extends FormRequest
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
            "district_id" => "required",
            "title.*" => ['required', new UniqueTitle('Upazilla', 'district_id', $request->district_id)],
        ];
    }

    public function messages()
    {
        return [
            'district_id.required' => __('upazila.district_required'),
            'title.required' => __('upazila.title_required'),
        ];
    }
}
