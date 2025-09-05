<?php
namespace App\Http\Request;

use System\Request\Request;

class CategoryRequest extends Request
{
    public function rules()
    {
        return
            [
                'name' => 'required|max:210'
            ];
    }
}