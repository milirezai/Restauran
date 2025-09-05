<?php
namespace App\Http\Request;

use System\Request\Request;

class NewsLetterRequest extends Request
{
    public function rules()
    {
        return
            [
                'email' => 'required|email|max:191'
            ];
    }
}