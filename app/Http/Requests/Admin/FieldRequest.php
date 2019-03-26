<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class FieldRequest extends FormRequest
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
            'title_uk' => 'required|string|max:191',
            'title_ru' => 'required|string|max:191',
            'title_en' => 'required|string|max:191',
            'values' => 'required|array|size:3',
            'values.*' => 'required|array|min:1',
            'values.*.*' => 'required|string|max:191',
        ];
    }
}
