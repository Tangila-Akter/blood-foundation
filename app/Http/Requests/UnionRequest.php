<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\UniqueTitle;

class UnionRequest extends FormRequest
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
            "upazilla_id" => "required",
            "title.*" => ['required', new UniqueTitle('Union', 'upazilla_id', $request->upazilla_id)],
        ];
    }

    public function messages()
    {
        return [
            'upazilla_id.required' => __('union.upzila_required'),
            'title.required' => __('union.title_required'),
        ];
    }
}
