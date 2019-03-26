<?php

namespace App\Http\Requests\Admin;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
        $rules = [
            'colors' => 'required|array|min:1',
            'amount' => 'required|integer|min:1',

            'title_uk' => 'required|string|max:191',
            'characteristic_uk' => 'required',
            'description_uk' => 'required',

            'title_ru' => 'required|string|max:191',
            'characteristic_ru' => 'required',
            'description_ru' => 'required',

            'title_en' => 'required|string|max:191',
            'characteristic_en' => 'required',
            'description_en' => 'required',
        ];

        if(count($this->route()->parameters()) <= 0) {
            $rules['files'] = 'required|array';
            $rules['files.*'] = 'required|file';
        }

        $category_id = request()->get('category_id');
        $fields_ids = Category::find($category_id)->fieldsArray();

        foreach ($fields_ids as $id) {
            $rules["field_$id"] = 'required|array|min:1';
        }

        return $rules;
    }
}
