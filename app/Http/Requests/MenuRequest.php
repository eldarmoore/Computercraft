<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;

class MenuRequest extends Request
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
        $menu_id = isset($all['menu_id']) ? ',' . $all['menu_id'] : '';

        return [
            'link' => 'required',
            'url' => 'required|unique:menus,url' . $menu_id,
            'title' => 'required'
        ];
    }

}
