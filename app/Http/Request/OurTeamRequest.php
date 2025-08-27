<?php
namespace App\Http\Request;

use System\Request\Request;

class OurTeamRequest extends Request
{
    public function rules()
    {
        return
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'avatar' => 'required',
                'position' => 'required',
                'status' => 'required',
                'is_active' => 'required'
            ];
    }
}