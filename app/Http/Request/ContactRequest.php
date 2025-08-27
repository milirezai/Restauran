<?php
namespace App\Http\Request;

use System\Request\Request;

class ContactRequest extends Request
{
    public function rules()
    {
        return
            [
                'full_name' => 'required',
                'email' => 'required|email',
                'title' => 'required',
                'message' => 'required',
            ];
    }
}