<?php
namespace App\Http\Request;

use System\Request\Request;

class OurTeamRequest extends Request
{
    public function rules()
    {
        if (methodField() == 'put')
        {
            return
                [
                    'first_name' => 'max:191',
                    'last_name' => 'max:191',
                    'avatar' => 'file|mimes:png,jpg,jpeg',
                    'position' => 'required|max:191'
                ];
        }
        else
        {
            return
                [
                    'first_name' => 'required|max:191',
                    'last_name' => 'required|max:191',
                    'avatar' => 'file|required|mimes:png,jpg,jpeg',
                    'position' => 'required|max:191'
                ];
        }
    }
}