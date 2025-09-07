<?php
namespace App\Http\Request;

use System\Request\Request;

class InfoUserRequest extends Request
{
    public function rules()
    {
        return
            [
                'email' => 'required|email',
                'first_name' => 'required|max:191',
                'last_name' => 'required|max:191',
                'avatar' => 'file|mimes:png,jpg,jpeg',
                'address' => 'required',
                'zip_code' => 'required'
            ];
    }
}