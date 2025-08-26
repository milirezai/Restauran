<?php
namespace App\Http\Request;

use System\Request\Request;

class UserRequest extends Request
{
    public function rules()
    {
        return
        [
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
        ];
    }
}