<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;

class CategoryRequest extends Request
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
        $all = Input::all();
        $category_id = isset($all['category_id']) ? ',' . $all['category_id'] : '';

        //$image_validate = ($category_id) ? 'image' : 'required|image';

        return [
            'title' => 'required',
            'url' => 'required|unique:categories,url' . $category_id,
            'title' => 'required',
            //'image' => 'image',
        ];
    }

}
