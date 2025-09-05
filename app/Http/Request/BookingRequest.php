<?php
namespace App\Http\Request;

use System\Request\Request;

class BookingRequest extends Request
{
    public function rules()
    {
        return
            [
                'name' => 'required|max:191',
                'email' => 'required|email|max:191',
                'date' => 'required|max:191',
                'people' => 'required',
                'description' => 'required|max:1000',
            ];
    }
}