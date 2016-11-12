<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;

class ProductRequest extends Request
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
        $product_id = isset($all['product_id']) ? ',' . $all['product_id'] : '';

        return [
            'categorie_id' => 'required',
            'title' => 'required',
            'url' => 'required|unique:products,url' . $product_id,
            'price' => 'required|numeric',
//            'image' => 'image',
        ];
    }

}
